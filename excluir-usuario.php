<?php
    include("php/funcoes.php");

    $usuario = buscaUsuarioId($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuário</title>
</head>
<body>
    <form action="php/salvarUsuario.php?opcao=E&id=<?php echo $_GET["id"]; ?>" method="POST">
        <p>
            <label for="iNome">
                Deseja realmente excluir o usuário <?php echo $usuario['nome']?> ?
            </label>
        </p>

        <a href="usuarios.php" style="text-decoration: none;">
           <input type="button" value="Não">
        </a>
        <input type="submit" value="Sim">
    </form>
</body>
</html>