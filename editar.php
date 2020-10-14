<?php
 /// vamos protejer nuestra pagina
    session_start();
    if(!isset($_GET['id'])){
        header('Location: crud.php');
    }
    
    // nuestra pagina si lo va redireccionar a  nuestr login
    
    if(!isset($_SESSION['nombre'])){
        header('Location:index1.php');
    }elseif(isset($_SESSION['nombre'])){
        include 'conexion.php';
        $id =$_GET['id'];
        //vamos hacer un select
        $sentencia =$db->prepare("SELECT * FROM estudiantes WHERE Id_estudiante = ?;");
        $sentencia->execute([$id]);
        $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
    }else{
        echo"Error en sistema";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estudiante</title>
</head>
<body>
<center>
    <h3>Editar Estudiante:</h3>
    <form action="editar_proceso.php" method="post" >
        <table>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="txt2Nombre" value="<?php  echo $persona->nombre; ?>"></td>
            </tr>
            <tr>
                <td>Apellidos</td>
                <td><input type="text" name="txt2Apellidos" value="<?php  echo $persona->apellidos; ?>"></td>
            </tr>
            <tr>
                <td>Sexo</td>
                <td><input type="text" name="txt2Sexo" value="<?php  echo $persona->sexo; ?>"></td>
            </tr>
            <tr>
                <td>Direccion</td>
                <td><input type="text" name="txt2Direccion" value="<?php  echo $persona->direccion; ?>"></td>
            </tr>
            <tr>
                <td>Telefono</td>
                <td><input type="text" name="txt2Telefono" value="<?php  echo $persona->telefono; ?>"></td>
            </tr>
            <tr>
                <td>Ciudad</td>
                <td><input type="text" name="txt2Ciudad" value="<?php  echo $persona->ciudad; ?>"></td>
            </tr>
            <tr>
                <input type="hidden" name="oculto" >   
                <input type="hidden" name="id2" value=" <?php echo $persona->Id_estudiante ?>">
                <td><input type="reset" name=""></td>
                <td colspan="2"><input type="submit" value="Editar Estudian"></td>
            </tr>
        </table>
    </form>
</center>
    
</body>
</html>
