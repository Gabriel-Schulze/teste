<?php
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "teste-banco";

    // $conn = new mysqli($servername,$username,$password,$dbname);
    include("conexao.php");

    if($conn->connect_error) {
        die("Falha na conexão: ".$conn->connect_error);
    }
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = $_POST['name'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['address'];
        $telefone = $_POST['phone'];

        $sql = "INSERT clientes (nome,cpf,endereco,telefone) 
                VALUES ('$nome','$cpf','$endereco','$telefone')";

        if($conn->query($sql) === TRUE) {
            echo "Novo resgistro cadastrado com sucesso!";
        } else {
            echo "Erro: ".$sql."<br>".$conn->error;
        }
    }

    $conn->close();
    //header("location: home.php");
?>