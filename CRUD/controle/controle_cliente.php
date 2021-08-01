<?php
require_once( $_SERVER['DOCUMENT_ROOT']."/modelo/conexao.php");

class Cliente{
	
	public function insere($nome,$idade,$sexo,$cidade,$estado,$pais){
	
	$obj_con = new Conexao();
	$conectar = $obj_con -> con();	
		
	$sqlInsert = "INSERT INTO cliente(nomeCliente,idadeCliente,idSexo,idCidade)
	VALUES ('".$nome."','".$idade."','".$sexo."','".$cidade."');";
		
	mysqli_query($conectar,$sqlInsert) or die(mysqli_error($conectar));
		
		
		
	}
	
	public function busca($id){
		
	$obj_con = new Conexao();
	$conectar = $obj_con -> con();
		
	$sqlSelect = "SELECT * FROM cliente WHERE idCliente = ".$id."";
		
	$result = mysqli_query($conectar,$sqlSelect) or die(mysqli_error($conectar));
		
	$result = $result->fetch_all(MYSQLI_ASSOC);
		
	return $result;
		
		
	}
	
	public function buscaAll(){
		
	$obj_con = new Conexao();
	$conectar = $obj_con -> con();
		
	$sqlSelect = "SELECT * FROM cliente";
		
	$result = mysqli_query($conectar,$sqlSelect) or die(mysqli_error($conectar));
		
	$result = $result->fetch_all(MYSQLI_ASSOC);
		
	return $result;
			
	}
	
	function deletar($id){
		
		
		$obj_con = new Conexao();
		$conectar = $obj_con -> con();
		
		$sqlDelete= "
		DELETE FROM cliente WHERE idCliente = ".$id;
		
		$resultado = mysqli_query($conectar,$sqlDelete) or die($resultado = false);
		
	}
	
	function editar($nome,$idade,$id){
		
		$obj_con = new Conexao();
		$conectar = $obj_con -> con();
		
		$sqlUpdate= "
		UPDATE cliente SET nomeCliente ='".$nome."', idadeCliente =".$idade." 
		WHERE idCliente = ".$id;
		
		mysqli_query($conectar,$sqlUpdate) or die($resultado = false);
	}
	
	public function buscar($nome){
		
	$obj_con = new Conexao();
	$conectar = $obj_con -> con();
		
	$sqlSelect = "SELECT * FROM cliente WHERE nomeCliente = ".$nome."";
		
	$result = mysqli_query($conectar,$sqlSelect) or die(mysqli_error($conectar));
		
	$result = $result->fetch_all(MYSQLI_ASSOC);
		
	return $result;
		
		
	}
	
}

?>