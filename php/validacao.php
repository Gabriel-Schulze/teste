<?php
    session_start();

    //Dados do form
    $email = $_POST['nEmail'];
    $senha = $_POST['nSenha'];

    //Conectar ao BD
    include("conexao.php");
    //Abrir a conexão - arquivo externo
    //Executar codigo SQL
    $sql = "SELECT * FROM usuario 
            WHERE login = '".$email."'
            AND flg_ativo = 'S' 
            AND senha = md5('".$senha."');";

    // var_dump($sql);
    // die;
    $result = mysqli_query($conn,$sql);
    //Fechar conexão
    mysqli_close($conn);
    //Validar retorno
    if(mysqli_num_rows($result) > 0){
        foreach($result as $campo){
            $_SESSION['tipo_usuario'] = $campo['id_tipo_usuario'] ; 
        }
        header("location: ../menu.php");
    } else {
        var_dump("Acesso NEGADO");
    }
    die();
?>