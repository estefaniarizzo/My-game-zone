<?php 
	session_start();
	include_once 'conexion.php';
  $usuario = $_POST['txtUsu'];
	$contrasena = $_POST['txtPass'];
	$sentencia = $db->prepare('SELECT * FROM usuario WHERE nombre_usu=? AND contraseña=?;');
	$sentencia->execute([$usuario, $contrasena]);
  $datos = $sentencia->fetch(PDO::FETCH_OBJ); 
  //
  /* if($datos !== NULL ){
   header('Location:https://www.google.com/search?q=google&oq=goo&aqs=chrome.1.69i57j0l4j69i60l3.3653j0j7&sourceid=chrome&ie=UTF-8');
   
  } */

  /* $sentencia2=$db->query("SELECT *FROM usuario");
    $usuario=$sentencia2->fetchALL(PDO::FETCH_OBJ);
    print_r($usuario); */
	//print_r($datos);

  if ($datos === FALSE) {
		header('Location: index.php');
	}elseif($sentencia->rowCount() == 1){
		$_SESSION['nombre'] = $datos->nombre_usu;
		header('Location:crud.php');
   
  }  
?>