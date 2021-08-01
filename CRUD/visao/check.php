<?php
session_start();
if(isset($_SESSION['email'])){
	
}else{
	unset($_SESSION['email']);
	unset($_SESSION['password']);
	header('location:../index.php');
}
?>





