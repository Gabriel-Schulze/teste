<?php
    include("php/funcoes.php");

    $produto = buscaProdutoId($_GET["id"]);
    $flagAtivo="";
    if($produto["flg_ativo"] == "S") {
        $flagAtivo = "checked";
    } 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>
</head>
<body>
    <form action="php/salvarProduto.php?opcao=A&id=<?php echo $_GET["id"];?>" method="POST">
        <p>
            <label for="iDescricao">Descricao:</label>
            <input type="text" maxlength="80" name="nDescricao" id="iDescricao" require value="<?php echo $produto['descricao'];?>">
        </p>
        <p>
            <label for="iQtd">Quantidade:</label>
            <input type="number" maxlength="60" name="nQtd" id="iQtd" require value="<?php echo $produto['quantidade'];?>">
        </p>
        <p>
            <label for="iValor">Valor:</label>
            <input type="number" maxlength="8" name="nValor" id="iValor" step="0.1" require value="<?php echo $produto['valor_unitario'];?>">
        </p>
        <p>
            <input type="checkbox" name="nAtivo" id="iAtivo" <?php echo $flagAtivo?>>
            <label for="iAtivo">Produto Ativo</label>
        </p>

        <a href="produtos.php"><input type="button" value="Voltar"></a>
        <input type="button" value="Limpar" onclick="limpar()">
        <input type="submit" value="Salvar">
        
    </form>
    <script>
        function limpar(){
            document.getElementById("iDescricao").value = "";
            document.getElementById("iQtd").value = "";
            document.getElementById("iValor").value = "";
            document.getElementById("iAtivo").checked = false;
        }
    </script>
</body>
</html>