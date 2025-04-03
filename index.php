<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>PHP</title>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="dist/css/bootstrap.min.css">
	</head>
	
	<body>
		<div class="mx-auto mt-5" style="width: 200px;">
			<form method="POST" action="php/validacao.php">
				
				<p>
					<label >Usuário:</label>
					<input class="form-control" type="email" name="nEmail">
				</p>
				<p>
					<label>Senha:</label>
					<input  class="form-control" type="password" name="nSenha">
				</p>
							
				<input class="btn btn-primary" type="submit">
			
			</form>
		</div>
	<script src="dist/js/bootstrap.min.js"></script>	
	</body>
	
</html>