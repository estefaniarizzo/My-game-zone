<?php 
//esto es para evirtar tenerme que volverme loguear
	session_start();
	if (isset($_SESSION['nombre'])) {
		header('Location: crud.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<center>
		<form method="POST" action="login_proceso.php">
			<h1 class="text-white font-weight-bolder">Iniciar Sesion</h1>
			<div class="form-group from">
				<label class="font-weight-bolder text-white" >Usuario o correo elctronico: </label>
				<input class="form-control form-control-lg text-center"type="text" name="txtUsu">
				<br>
				<label class="font-weight-bolder text-white">Password: </label>
				<input class="form-control form-control-lg text-center" type="password" name="txtPass">
				<br>
				<input type="submit" class="btn btn-outline-primary btn-lg btn-block" value="Ingresar">
				<br>
				</br>
				
			</div>
		</form>
	</center>
</body>
</html>