<?php
    include("php/funcoes.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Usuários</title>
</head>
<body>
    <form action="php/salvarUsuario.php?opcao=I" method="POST">
        <p>
            <label for="iNome">Nome:</label>
            <input type="text" maxlength="80" name="nNome" id="iNome" require>
        </p>
        <p>
            <label for="iTipo">Tipo de usuário:</label>
            <select name="nTipo" id="iTipo" required>
                <option value="">Selecione...</option>
                <?php echo  optionTipoUsuario(); ?>
            </select>
        </p>
        <p>
            <label for="iDataNasc">Data de Nascimento:</label>
            <input type="date" maxlength="60" name="nDataNasc" id="iDataNasc" require>
        </p>
        <p>
            <label for="iEmail">Login:</label>
            <input type="email" maxlength="60" name="nEmail" id="iEmail" require>
        </p>
        <p>
            <label for="iSenha">Senha:</label>
            <input type="password" maxlength="8" name="nSenha" id="iSenha" require>
        </p>
        <p>
            <input type="checkbox" name="nAtivo" id="iAtivo">
            <label for="iAtivo">Usuário Ativo</label>
        </p>

        <a href="usuarios.php"><input type="button" value="Voltar"></a>
        <input type="reset" value="Limpar">
        <input type="submit" value="Salvar">
    </form>
</body>
</html>