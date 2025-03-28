<?php
    include("php/funcoes.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>
</head>
<body>
    <form action="php/salvarProduto.php?opcao=I" method="POST">
        <p>
            <label for="iDescricao">Descricao:</label>
            <input type="text" maxlength="80" name="nDescricao" id="iDescricao" require>
        </p>
        <p>
            <label for="iQtd">Quantidade:</label>
            <input type="number" maxlength="60" name="nQtd" id="iQtd" require>
        </p>
        <p>
            <label for="iValor">Valor:</label>
            <input type="number" maxlength="8" name="nValor" id="iValor" step="0.1" require>
        </p>
        <p>
            <input type="checkbox" name="nAtivo" id="iAtivo">
            <label for="iAtivo">Produto Ativo</label>
        </p>

        <a href="produtos.php"><input type="button" value="Voltar"></a>
        <input type="reset" value="Limpar">
        <input type="submit" value="Salvar">
    </form>
</body>
</html>