<?php
    include 'conexion.php';

    if(!isset($_POST['oculto'])){
        exit();
    } 

  
    $nombre = $_POST['txtNombre'];
    $apellidos = $_POST['txtApellidos'];
    $sexo = $_POST['txtSexo'];
    $direccion = $_POST['txtDireccion'];
    $telefono = $_POST['txtTelefono'];
    $ciudad = $_POST['txtCiudad'] ;
   
    //llama al objeto de conexion para poder registrarlos
     $sentencia = $db->prepare("INSERT INTO `estudiantes`(`nombre`, `apellidos`, `sexo`, `direccion`, `telefono`, `ciudad`) VALUES (?,?,?,?,?,?)");
    $resultado=$sentencia->execute([$nombre,$apellidos,$sexo,$direccion,$telefono,$ciudad]); 

    if($resultado === TRUE){
        //echo "Insertado correctamente :)";
        header('Location: crud.php');
    }else{ 
        echo "Error al insertar :(";
    }
?> 