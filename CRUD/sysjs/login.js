function telaLogin(){
	
	window.location.href = ("../visao/controlevisao/controle_login.php");
}
function check(){
	
	var email    = $('#email').val();
	var password = $('#password').val();
	var acao     = $('#acao').val();
	
	$.ajax({
	
		type:"POST",
		url:"controlevisao/controle_login.php",
		data:{acao:acao, email:email, password:password},
		
		success:function(data){
		//console.log(data);
		alert("Accepted!");
		window.location.href = "telaMenu.php";
		}
		
	});
	
}