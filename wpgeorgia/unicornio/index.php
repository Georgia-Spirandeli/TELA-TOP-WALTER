<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Cadastro de Usuários</title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<style type="text/css">
			body {
				background-image: url("https://www.einerd.com.br/wp-content/uploads/2016/10/Darth-Vader-e-estrela-da-morte.jpg");
				background-repeat: no-repeat;

			}
			
			div {
			    background-color: #FFFF00;
			    width: 20%;
			    margin-top: 10%;
			    margin-left: 40%;
			    margin-right: 40%;
			}

			.input_button {
			    background-color: #A4A4A4;
			    width: 100%;
			    border: none;
			    color: white;
			    padding: 2% 2%;
			    text-align: center;
			    text-decoration: none;
			    display: inline-block;
			    font-size: 16px;
			    cursor: pointer;
			}
		</style>
	</head>
	<body>
		<h1 align="Center"> OI CURIOSO </h1>
	
		<div>
			<form class="w3-container" method="POST" action="save.php">
			  <p>
			  <label>Nome</label>
			  <input class="w3-input" type="text"></p>
			  <p>
			  <label>Senha</label>
			  <input class="w3-input" type="password"></p>
			  <p>
			  <label>Confirmar Senha</label>
			  <input class="w3-input" type="passwordConf"></p>
			  <p>
			  <input type="submit" class="input_button" value="Entrar">
			</form>
		</div>
	</body>
	

	
</html>

