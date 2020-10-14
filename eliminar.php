<?php
    //print_r($_GET);
    //se validad
    if(!isset($_GET['id'])){
        header('Location: crud.php');
    }

    include 'conexion.php';

    $codigo = $_GET['id'];
    // para eliminar se prepara
    $sentencia=$db->prepare("DELETE FROM estudiantes WHERE Id_estudiante =?;");
    $resultado = $sentencia->execute([$codigo]);

    if($resultado === TRUE){
        header('Location: index.php');
    }else{
        echo"Error al eliminar";
    }
?>