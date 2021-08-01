<?php include ("../../controle/controle_login.php");

$email    = $_POST["email"];
$password = $_POST["password"];
$acao     = $_POST["acao"];
session_start();

$obj_login = new Login();


if($acao == "logar"){

	$result = $obj_login->check($email, $password);
	
	
	if($result == 1){
		
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		
		
	}else{
	
		unset($_SESSION['email']);
		unset($_SESSION['password']);
	}
	
	
	echo $result;
	
	
}

?>
