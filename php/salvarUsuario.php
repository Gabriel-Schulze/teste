<?php
    include('funcoes.php');

    $nome = $_POST["nNome"];
    $tipo = $_POST["nTipo"];
    $dataNasc = $_POST["nDataNasc"];
    $email = $_POST["nEmail"];
    $senha = $_POST["nSenha"];
    $foto = $_FILES["nFoto"];
    $opcao = $_GET['opcao'];
    $id = $_GET["id"];
    $setSenha = "";

    // var_dump(proximoId('usuario','id_usuario'));
    // die();
    
    if($senha != '') {
        $setSenha = "senha = md5('$senha'),";
    }

    if($_POST["nAtivo"] == 'on') {
        $ativo = "S";
    } else {
        $ativo = "N";
    }

    include("conexao.php");

    if($opcao == "I") {
        $id = proximoId('usuario','id_usuario');
        $sql = "INSERT INTO usuario (id_usuario,id_tipo_usuario,data_nasc,nome,login,senha,flg_ativo) 
                VALUES($id,$tipo,'$dataNasc','$nome','$email',md5('$senha'),'$ativo');";
    }elseif($opcao == "A") {
        $sql = "UPDATE usuario 
                SET 
                    id_tipo_usuario = $tipo,
                    nome = '$nome', 
                    data_nasc = '$dataNasc',
                    login = '$email', 
                    $setSenha
                    flg_ativo = '$ativo'
                WHERE id_usuario = $id;";
    }elseif($opcao == "E"){
        $sql = "DELETE FROM usuario WHERE id_usuario = $id;";
    }
    
    $result = mysqli_query($conn,$sql);

    mysqli_close($conn);

    if($foto['tmp_name'] != "") {
        //Grava a extensão do arquivo
        $extensao = pathinfo($foto['name'],PATHINFO_EXTENSION);

        //Novo nome
        $novoNome = md5($foto['name']).'.'.$extensao; 

        if(is_dir('../img/')) {
            //Existe
            $diretorio = '../img/';
        } else {
            //Criar pq não existe
            $diretorio = mkdir('../img/');
        }

        //Cria uma copia do arquivo local na pasta do projeto 
        move_uploaded_file($foto['tmp_name'], $diretorio.$novoNome);

        //Caminho que sera salvo no banco de dados
        $dirImagem = 'img/'.$novoNome;

        include("conexao.php");

        $sql = "UPDATE usuario
                SET foto = '".$dirImagem."'
                WHERE id_usuario = $id;";
        
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
                
    }

    // var_dump($sql);
    // die();

    header("location: ../usuarios.php");
?>