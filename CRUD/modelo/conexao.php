<?php 
class conexao{
	//Função para executar minha conexão com o banco de dados
	function con(){
		
		$conectar = mysqli_connect("localhost","root","") or die (mysqli_error());
		// seleciona banco
		mysqli_select_db($conectar, "loja") or die (mysql_error());
		
		return $conectar;
	}
	
}

?>