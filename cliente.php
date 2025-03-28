<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro de Cliente</h2>
        <form action="php/cadastro_cliente.php" method="post">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required pattern="\d{11}" 
            title="Insira um CPF válido (11 dígitos)">

            <label for="address">Endereço:</label>
            <input type="text" id="address" name="address" required>

            <label for="phone">Telefone:</label>
            <input type="tel" id="phone" name="phone" 
            required pattern="\d{10,11}" title="Insira um telefone 
            válido (10 ou 11 dígitos)">

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
