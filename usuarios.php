<?php
    include("php/funcoes.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    <h5>
        <a href="menu.php">Voltar</a>
    </h5>
    
    <h4>Usuários</h4>

    <p>
        <a href="novo-usuario.php">
            <input type="button" value="Novo Usuário">
        </a>
    </p>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Tipo de Usuário</th>  
            <th>Data de Nascimento</th>  
            <th>Login</th>
            <th>Senha</th>
            <th>Ativo</th>
            <th>Ações</th>
        </tr>
        <?php echo listaUsuarios(); ?>
        <!-- 
        <tr>
            <td>id_usuario</td>
            <td>nome</td>
            <td>login</td>
            <td>senha</td>
            <td>Alterar | Excluir</td>
        </tr> 
        -->
    </table>
</body>
</html>