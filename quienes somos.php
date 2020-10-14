<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY GAME ZONE</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
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
    
    <main class="main">
        
        <div class="contenedor">
           
            <section class="info">
                
                <article class="info__columna">
                    
                    <img src="img/mision.png" alt="" class="info__img">
                    
                    <h2 class="info__titulo"></h2>
                    <p class="info__txt">MY GAME ZONE es una empresa dedicada a la venta de videojuegos novedades de anime para el entretenimiento del cliente ofreciendo una variedad de diferentes categorías en anime. Nuestra misión está enfocada en generar 
                        y aplicar conocimientos tecnológicos que sean atractivos para el cliente. </p>
                </article>
                <article class="info__columna">
                    <img src="img/vision.png" alt="" class="info__img">
                    <h2 class="info__titulo"></h2>
                    <p class="info__txt">En el 2023 ser una empresa de reconocido prestigio nacional, con excelencia en ventas de videojuegos, y anime donde se brinde un producto de excelente calidad 
                        y en donde el mejoramiento continuo en todas las áreas sea de agrado a nuestros clientes, 
                        comprometida con el servicio al cliente, la formación integral de su recurso humano y tecnológico.
                         </p>
                </article>
                
            </section>
            <section class="producto">
                <h2 class="section__titulo">QUIENES SOMOS?</h2>
                
            </section>
        </div>
    </main>
    <footer class="footer">
       
        <p class="copy">&copy; MY GAME ZONE 2020-Todos los derechos son reservados</p>
    </footer>
    <script src="js/menu.js"></script>
</body>
</html>