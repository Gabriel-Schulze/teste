<?php
    $descricao = $_POST["nDescricao"];
    $qtd = $_POST["nQtd"];
    $valor = $_POST["nValor"];
    $opcao = $_GET['opcao'];
    $id = $_GET["id"];
    // $ativo = $_POST["nAtivo"];

    if($_POST["nAtivo"] == 'on') {
        $ativo = "S";
    } else {
        $ativo = "N";
    }

    include("conexao.php");

    if($opcao == "I") {
        $sql = "INSERT INTO produtos (descricao, quantidade, valor_unitario, flg_ativo) 
                VALUES ('$descricao', $qtd, $valor, '$ativo');";
    }elseif($opcao == "A") {
        $sql = "UPDATE produtos
                SET descricao = '$descricao', quantidade = $qtd, valor_unitario = $valor, flg_ativo = '$ativo'
                WHERE id_produto = $id;";
    }elseif($opcao == "E"){
        $sql = "DELETE FROM produtos WHERE id_produto = $id;";
    }
    
    // var_dump($sql);
    // die();

    $result = mysqli_query($conn,$sql);

    mysqli_close($conn);


    header("location: ../produtos.php");
?>