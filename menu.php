<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="menu.php">Menu</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php if ($_SESSION['tipo_usuario'] == 1) { ?>
                    <li class="nav-item">
                        <a href="usuarios.php" class="nav-link">Usuários</a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a href="produtos.php" class="nav-link">Produtos</a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Sair</a>
                </li>
            </ul>
        </div>
    </nav>






    <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>