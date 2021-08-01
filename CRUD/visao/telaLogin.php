
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Start Session</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="application/javascript" src= "../sysjs/login.js" ></script>
</head>

	

	<form method="POST" >
		<Label>E-mail: <input type="text" id="email"  name="email"> </Label> <br>
		<Label>Password: <input type="password" id="password" name="password" > </Label> <br> 
		
		<input type="button" class="btn btn-primary" onClick="check();" value="Go">
		<input type="hidden" name="acao" id="acao" value="logar">
	</form>
	
<body>
</body>
</html>
