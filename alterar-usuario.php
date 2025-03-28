<?php
    include("php/funcoes.php");

    $usuario = buscaUsuarioId($_GET["id"]);
    $flagAtivo="";
    if($usuario["flg_ativo"] == "S") {
        $flagAtivo = "checked";
    } 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Usuário</title>
</head>
<body>
    <form action="php/salvarUsuario.php?opcao=A&id=<?php echo $_GET["id"]; ?>" method="POST">
        <p>
            <label for="iNome">Nome:</label>
            <input 
                type="text" 
                maxlength="80" 
                name="nNome" 
                id="iNome" 
                required
                value="<?php echo $usuario['nome']?>"
            >
        </p>
        <p>
            <label for="iTipo">Tipo de usuário:</label>
            <select name="nTipo" id="iTipo" required>
                <?php echo optionTipoUsuarioId($usuario['id_tipo_usuario']);?>
                <?php echo  optionTipoUsuario($usuario['id_tipo_usuario']); ?>
            </select>
        </p>
        <p>
            <label for="iDataNasc">Data de Nascimento:</label>
            <input 
                type="date" 
                maxlength="60" 
                name="nDataNasc" 
                id="iDataNasc" 
                require
                value="<?php echo $usuario['data_nasc']; ?>"
            >
        </p>
        <p>
            <label for="iEmail">Login:</label>
            <input 
                type="email" 
                maxlength="60" 
                name="nEmail" 
                id="iEmail" 
                require
                value="<?php echo $usuario['login']?>"
            >
        </p>
        <p>
            <label for="iSenha">Senha:</label>
            <input type="password" maxlength="8" name="nSenha" id="iSenha">
        </p>
        <p>
            <input type="checkbox" name="nAtivo" id="iAtivo" <?php echo $flagAtivo?>>
            <label for="iAtivo">Usuário Ativo</label>
        </p>

        <a href="usuarios.php"><input type="button" value="Voltar"></a>
        <input type="button" value="Limpar" onclick="limpar()">
        <input type="submit" value="Salvar">
    </form>
    <script>
        function limpar(){
            document.getElementById("iNome").value = "";
            document.getElementById("iEmail").value = "";
            document.getElementById("iAtivo").checked = false;
        }
    </script>
</body>
</html>