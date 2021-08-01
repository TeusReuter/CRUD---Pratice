<?php include("check.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insert</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="application/javascript" src= "../sysjs/cliente.js" ></script>
</head>
	
	<form>
	<input type="button" class="btn btn-primary" onClick="telaMenu();" value="Home">
	<input type="button" class="btn btn-primary" onClick="telaCadastro();" value="Insert">
	<input type="button" class="btn btn-primary" onClick="telaListagem();" value="Show">
	</form>
	<br>
	
	<form method="POST" >
	Name: <br>
		<input type="text" id="nome" > <br> 
		Age: <br>
		<input type="text" id="idade" > <br>
		Sex: <br>
		<select name="sexo" id="sexo">
		<option value="0">Show Options</option>
		<option value="1">Masculino</option>
  		<option value="2">Feminino</option>
		</select> <br>
		City: <br> 
		<select name="cidade" id="cidade">
		<option value="0">Show Options</option>
		<option value="1">Porto Alegre</option>
  		<option value="2">Curitiba</option>
		</select> <br>
		State: <br> 
		<select name="estado" id="estado">
		<option value="0">Show Options</option>
		<option value="1">Rio Grande do Sul</option>
  		<option value="2">Paraná</option>
		</select> <br>
		Country: <br>
		<select name="pais" id="pais">
		<option value="0">Show Options</option>
		<option value="1">Brasil</option>
  		<option value="2">Uruguai</option> 
		</select> <br>
		<br>
			
		<input type="reset" class="btn btn-outline-dark" value="Clean all fields">		
		<input type="button" class="btn btn-outline-success" onClick="insere();" value="Insert">
		
	</form>
	<br>
	

<body>
</body>
</html>