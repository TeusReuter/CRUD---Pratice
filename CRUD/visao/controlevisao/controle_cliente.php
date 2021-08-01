<?php

include("../../controle/controle_cliente.php");

@$nome   = $_POST['nome'];
@$idade  = $_POST['idade'];
@$acao   = $_POST['acao'];
@$sexo   = $_POST['sexo'];
@$cidade = $_POST['cidade'];
@$estado = $_POST['estado'];
@$pais   = $_POST['pais'];
@$id     = $_POST['id'];

$obj_cliente = new Cliente();


if($acao == "insere"){
	
$result = $obj_cliente->insere($nome,$idade,$sexo,$cidade,$estado,$pais);
	
}

else if ($acao == "deletar"){
	
$obj_cliente->deletar($id);
	
}

else if ($acao == "editar"){
	
	
$result = $obj_cliente->editar($nome,$idade,$id);
	
}

?>