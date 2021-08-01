<?php 
include ("check.php");
include("../modelo/conexao.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Search</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="application/javascript" src= "../sysjs/cliente.js" ></script>
</head>
	
	<form>
	<input type="button" class="btn btn-primary" onClick="telaMenu();" value="Home">
	<input type="button" class="btn btn-success" onClick="telaCadastro();" value="Insert">
	<input type="button" class="btn btn-dark" onClick="telaPesquisa();" value="Search">
	<input type="button" class="btn btn-info" onClick="telaListagem();" value="Show">
	</form>
	<br>
	
	
	<div>
	<input type="nome" id="nome" placeholder="Search..." autocomplete>
	<input type="button" class="btn btn-warning" onClick"telaEditar();" value="Update">
	
	</div>

<body>
</body>
</html>