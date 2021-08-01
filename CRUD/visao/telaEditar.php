<?php include ("../controle/controle_cliente.php");
include("check.php");
?>
<?php $id = $_POST['id']; ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update</title>
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
	$arrayCliente = $obj_cliente -> busca($id);
	?>
	

<body>
	<form method="POST" >
		
		Name: <input type="text" name="nome" id="nome" value="<?php echo $arrayCliente[0]['nomeCliente'] ?>"> <br>
		Age:  <input type="text" name="idade" id="idade" value="<?php echo $arrayCliente[0]['idadeCliente'] ?>">
				<input type="hidden" name="id" id="id" value="<?php echo $arrayCliente[0]['idCliente'] ?>">
		
			<input type="button" class="btn btn-outline-warning" onClick="editar();" value="Update">
			<input type="hidden" name="acao" value="editar">
	
	
	</form>
	<br>
	
</body>
</html>