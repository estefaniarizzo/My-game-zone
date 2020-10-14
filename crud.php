<?php
   
    session_start();
    if(!isset($_SESSION['nombre'])){
        header('Location:index1.php');
    }elseif(isset($_SESSION['nombre'])){
        include 'conexion.php';
        $sentencia = $db->query("SELECT * FROM estudiantes;");
        $estudiantes = $sentencia->fetchALL(PDO::FETCH_OBJ);
    
    }else{
        echo"Error en sistema";
    }
   

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<br>
<h2> Bienvenido: <?php  echo $_SESSION['nombre']; ?> </h2>
<div>
    <a href="cerrar_sesion.php"> cerrar Sesion</a>
</div>
<center>
<br>
<br>

        <form  class="formulario"action="insertar.php" method="post">
            <h2>Registro de estudiantes</h2>
                <table>
                    <tr>
                        <td>Nombre</td>
                        <td><input type="text" name="txtNombre"></td>
                    </tr>
                    <tr>
                        <td>Apellidos</td>
                        <td><input type="text" name="txtApellidos"></td>
                    </tr>
                    <tr>
                        <td>Sexo</td>
                        <td><input type="text" name="txtSexo"></td>
                    </tr>
                    <tr>
                        <td>Direccion</td>
                        <td><input type="text" name="txtDireccion"></td>
                    </tr>
                    <tr>
                        <td>Telefono</td>
                        <td><input type="text" name="txtTelefono"></td>
                    </tr>
                    <tr>
                        <td>Ciudad</td>
                        <td><input type="text" name="txtCiudad"></td>
                    </tr>
                    <input type="hidden" name="oculto" value="1">
                    <tr>
                        <td><input type="reset" name=""></td>
                        <td><input type="submit" value="Ingresar Estudiantes"></td>

                    </tr>
                </table>
        </from>
        <!-- FIN DEL INSERT -->
        <br>
        <br>
        <br>
        <hr>
    <h4>Lista de Estudiantes</h4>
        <table>
            <tr>
                <td>Id_estudiante</td>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Sexo</td>
                <td>Direccion</td>
                <td>Telefono</td>
                <td>Ciudad</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
            <?php
                foreach ($estudiantes as $data){
                    ?>
                        <tr>
                            <td> <?php  echo $data->Id_estudiante; ?> </td>
                            <td> <?php  echo $data->nombre; ?> </td>
                            <td> <?php  echo $data->apellidos; ?> </td>
                            <td> <?php  echo $data->sexo; ?> </td>
                            <td> <?php  echo $data->direccion; ?> </td>
                            <td> <?php  echo $data->telefono; ?> </td>
                            <td> <?php  echo $data->ciudad; ?> </td>
                            <td><a href="editar.php?id=<?php  echo $data->Id_estudiante; ?>">Edita</a></td>
                            <td><a href="eliminar.php?id=<?php  echo $data->Id_estudiante; ?>">Eliminar</a></td>
                        </tr>
                    <?php
                }
            ?>
        </table>
</center>
</body>
</html>