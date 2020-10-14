<?php

//print_r($_POST);

// vamos a validad
    if(!isset($_POST['oculto'])){
        header('Location: crud.php');
    }

    include 'conexion.php';
    $id2=$_POST['id2'];
    $nombre2=$_POST['txt2Nombre'];
    $apellidos2=$_POST['txt2Apellidos'];
    $sexo2=$_POST['txt2Sexo'];
    $direccion2=$_POST['txt2Direccion'];
    $telefono2=$_POST['txt2Telefono'];
    $ciudad2=$_POST['txt2Ciudad'];

    // vamos hacer un update se insertan los nuevos datos modificado
    //pormedio de est mas actulizar los datos de nuestra tabla
    $sentencia=$db->prepare("UPDATE estudiantes SET nombre=?, apellidos=?, sexo=?, direccion=?, 
                                                    telefono=?, ciudad=? WHERE Id_estudiante=?");
    $resultado=$sentencia->execute([$nombre2, $apellidos2, $sexo2, $direccion2, $telefono2, $ciudad2, $id2]);

    if($resultado === TRUE){
        header ('Location: index1.php');
    }else{
        echo "Error al editar :(";
    }

?>