function telaMenu(){
	
	window.location.href = 'telaMenu.php';
}
function telaCadastro(){

	window.location.href = 'telaCadastro.php';
}
function telaEditar(valor){
	
	$('#idFormulario').val(valor);
	$('#formulario').submit();
}

function telaListagem(){
	
	window.location.href = 'telaListagem.php';
}

function insere(){
	
	var acao   = $('#acao').val();
	var nome   = $('#nome').val();
	var idade  = $('#idade').val();
	var sexo   = $('#sexo').val();
	var cidade = $('#cidade').val();
	var estado = $('#estado').val();
	var pais   = $('#pais').val();
	
	$.ajax({
	
		type:"POST",
		url:"controlevisao/controle_cliente.php",
		data:{acao:"insere", nome:nome, idade:idade, sexo:sexo, cidade:cidade, estado:estado, pais:pais},
		
		success:function(data){
			
			console.log(data); 
			alert("Successfully inserted!");
			telaListagem();
			
				
			
		}
		
	});
	
	
	
	
}

function deletar(id){

	$.ajax({
	
		type:"POST",
		url:"controlevisao/controle_cliente.php",
		data:{acao:"deletar", id:id},
		
		success:function(data){
			
			console.log(data);
			alert("Successfully Deleted!");
			telaListagem();
			
				
			
		}
		
	});
	
	
}

	function editar(){
	
	var id     =$('#id').val();
	var nome   = $('#nome').val();
	var idade  = $('#idade').val();
	
	$.ajax({
	
		type:"POST",
		url:"controlevisao/controle_cliente.php",
		data:{acao:"editar",id:id, nome:nome, idade:idade},
		
		success:function(data){
		//console.log(data);
		alert("Successfully Updated!");
		telaMenu();	
			
		}
		
	});
	
	
		
	
}
function buscar(nome){
	
var id =$('#id').val();
	
	$.ajax({
	
		type:"POST",
		url:"controlevisao/controle_cliente.php",
		data:{acao:"",nome:nome},
		
		success:function(data){
		//console.log(data); 
		telaListagem();
			
		}
		
	});
	
}
		
		
		

