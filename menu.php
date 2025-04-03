<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <h5>
        <?php if($_SESSION['tipo_usuario'] == 1) {?>
        <a href="usuarios.php">Usuários</a>
        |
        <?php }?>
        <a href="produtos.php">Produtos</a>
        |
        <a href="index.php">Sair</a>
    </h5>
</body>
</html>