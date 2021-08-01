<?php 

require_once( $_SERVER['DOCUMENT_ROOT']."/modelo/conexao.php");

class Login{
	//Função para capturar o email e a senha do banco de dados, com o objetivo de efetuar o login
	public function check($email,$password){
		
	$obj_con = new Conexao();
	$conectar = $obj_con -> con();	
		
	$sql = "SELECT * FROM usuario WHERE emailUsuario ='".$email."' AND senhaUsuario = '".$password."'";	
		
	$resultado = mysqli_query($conectar,$sql);
	$row     = mysqli_num_rows($resultado);
	
	return $row;
		
		
	}
	
}





?>