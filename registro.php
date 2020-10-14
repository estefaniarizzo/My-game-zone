<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY GAME ZONE</title>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="contenedor">
            <h1 class="logo">MY GAME ZONE</h1>
            <spam class="material-icons" id="btn-menu">menu</spam>
            
            <nav class="nav" id="nav">
               
                <ul class="menu">
                    <li class="menu__link select"><a href="index.php">Inicio</a></li>
                    <li class="menu__link"><a href="quienes somos.php">Quienes Somos</a></li>
                    <li class="menu__link"><a href="productos.php">Productos</a></li>
                    <li class="menu__link"><a href="inicio sesion.php">Iniciar Sesion</a></li>
                    <li class="menu__link"><a href="registro.php">Registro</a></li>
                    <li class="menu__link"><a href="contactenos.php">Contactenos</a></li>
                  
                </ul>
            </nav>
        </div>

    </header>
    <div class="banner">
        <img src="img/imagen4.jpg" alt="" class="banner__img">
        <div class="contenedor">
            <h2 class="banner__titulo">BIENVENIDO A MY GAME ZONE</h2>
            <p class="banner__txt">Disfruta de tus juegos de antaño y lo mejor del momento</p>
        </div>
    </div>
    <header>
        <div class="w3-container w3-red ">
        <center><h1>REGISTRO</h1></center>
        </div>
        </header>
        <p>
            <center><label class="w3-label">Nombre y Apellido</label></center>
            <input class="w3-input w3-border" type="text" name="Nombre">
            </p>
        <p>
            <p>
                <center><label class="w3-label">Edad</label></center>
                <input class="w3-input w3-border" type="number" name="Edad">
                </p>
                <p>
                <center><label class="w3-label">Usuario o Correo Electronico</label></center>
                    <input class="w3-input w3-border" type="text" name="Usuario">
                    </p>
            <center><label class="w3-label">Direccion</label></center>
            <input class="w3-input w3-border" type="text" name="Direccion">
            </p>
            <p>
                <p>
                    <center><label class="w3-label">Pais</label></center>
                    <input class="w3-input w3-border" type="text" name="Pais">
                    </p>
                    <p>
                        <center><label class="w3-label">Ciudad</label></center>
                        <input class="w3-input w3-border" type="text" name="Ciudad">
                        </p>
                <center><label class="w3-label">Contraseña</label></center>
                <input class="w3-input w3-border" type="password" name="Contraseña">
                </p>
                <input type="hidden"  name="Registro" value="Registro">
    <center><button class="w3-btn w3-blue">Registrarse</button></center>
    </p>
    <center><p><a href="index.html">Ahora no</a>   <a href="inicio sesion.html">Tengo una cuenta</a></p></center>
    
        <footer class="footer">
       
            <p class="copy">&copy; MY GAME ZONE 2020-Todos los derechos son reservados</p>
        </footer>
        <script src="js/menu.js"></script>
</body>
</html>