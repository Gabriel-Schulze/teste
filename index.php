<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PHP</title>
    <style>
        :root {
            --fonte:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        * {
            margin: 0;
        }   

        body {
            background-color: #ebebeb;
            display: flex;
            justify-content: center;
            font-family: var(--fonte);
            margin: 30vh 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            background-color: white;
            padding: 20px 50px 40px 50px;
            gap: 15px;
            border-radius: 15px;
            box-shadow: 1px 1px 1px 1px rgb(0, 0, 0,30%);
        }

        h1{
            cursor: default;
        }

        .input {
            border: 2px solid #a8a8a8;
            border-radius: 3px;
            padding: 3px;
            opacity: 60%;
            font-family: var(--fonte);
        }

        #btn_login {
            border: none;
            background: linear-gradient(#4276be 10%, #004ebb 90%);
            border-radius: 5px;
            width: fit-content;
            color: white;
            padding: 5px 15px;
            font-family: var(--fonte);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div >
        <form action="php/validacao.php" method="POST" class="container">
            <h1>Login</h1>
            <input type="text" class="input" placeholder="Username" name="nEmail" id="iEmail">
            <input type="password" class="input" placeholder="Password" name="nSenha" id="iSenha">
            <input type="submit" id="btn_login" value="Sign in">
        </form>
    </div>
</body>
</html>