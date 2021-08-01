<?php include("../controle/controle_cliente.php"); 
include("check.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Show</title>
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
	
	
	<?php
	
	$obj_cliente = new Cliente();
	$arrayClientes = $obj_cliente -> buscaAll();
	
	?>

	
<body>
	
	<table border="1">
		<tr>
			<td>Name</td>
			<td>Age</td>
		
		</tr>
		
		<?php

		foreach($arrayClientes as $value){ //laço do retorno
			
		?>
		
		<tr>
			<td><?php echo $value['nomeCliente'] ?> </td>
			<td><?php echo $value['idadeCliente'] ?> </td>
			<td><input type="button" class="btn btn-outline-danger"  onClick="deletar(<?php echo $value['idCliente'] ?>)" value="Delete"></td>
			<td> <input type="button" class="btn btn-outline-warning" onClick="telaEditar(<?php echo $value['idCliente'] ?>)" value="Update"></td>
		</tr>

	
		
		<?php	
		}
		?>
		
		<form id="formulario" action="telaEditar.php" method="POST">
		<input type="hidden" name="id" id="idFormulario">
		
		
		
		
		
		</form>
	</table>
	
</body>
</html>