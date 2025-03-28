<?php
    $nome = $_POST["nNome"];
    $tipo = $_POST["nTipo"];
    $dataNasc = $_POST["nDataNasc"];
    $email = $_POST["nEmail"];
    $senha = $_POST["nSenha"];
    $opcao = $_GET['opcao'];
    $id = $_GET["id"];
    $setSenha = "";
    // $ativo = $_POST["nAtivo"];
    
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
        $sql = "INSERT INTO usuario (id_tipo_usuario,data_nasc,nome,login,senha,flg_ativo) 
                VALUES($tipo,'$dataNasc','$nome','$email',md5('$senha'),'$ativo');";
    }elseif($opcao == "A") {
        $sql = "UPDATE usuario 
                SET id_tipo_usuario = $tipo,
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

    // var_dump($sql);
    // die();

    header("location: ../usuarios.php");
?>