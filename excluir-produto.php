<?php
    include("php/funcoes.php");

    $produto = buscaProdutoId($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Produto</title>
</head>
<body>
    <form action="php/salvarProduto.php?opcao=E&id=<?php echo $_GET["id"]; ?>" method="POST">
        <p>
            <label for="iNome">
                Deseja realmente excluir o produto <?php echo $produto['descricao']?> ?
            </label>
        </p>

        <a href="produtos.php" style="text-decoration: none;">
           <input type="button" value="Não">
        </a>
        <input type="submit" value="Sim">
    </form>
</body>
</html>