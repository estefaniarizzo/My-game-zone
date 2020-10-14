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
                    
                    <img src="img/xbox.jpg" alt="" class="info__img">
                    
                    <h2 class="info__titulo">CONSOLAS XBOX</h2>
                    <p class="info__txt">$1300000 </p>
                    <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>
                </article>
                <article class="info__columna">
                    <img src="img/ps.jpg" alt="" class="info__img">
                    <h2 class="info__titulo">CONSOLA PS3</h2>
                    <p class="info__txt">$900000</p>
                    <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>
                </article>
                <article class="info__columna">
                    <img src="img/nintendo.jpg" alt="" class="info__img">
                    <h2 class="info__titulo">CONSOLA NINTENDO</h2>
                    <p class="info__txt">$1500000</p>
                    <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>
                </article>
            </section>
           
        </div>
        
    </main>
    <section class="producto">
        <h2 class="section__titulo">...</h2>
        
    </section>
    <main class="main">
        <div class="contenedor">
           
            <section class="info">
                
                <article class="info__columna">
                    
                    <img src="img/maleta.jpg" alt="" class="info__img">
                    
                    <h2 class="info__titulo">MALETA DEATH NOTE</h2>
                    <p class="info__txt">$25000 </p>
                    <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>

                </article>
                <article class="info__columna">
                    <img src="img/figura.jpg" alt="" class="info__img">
                    <h2 class="info__titulo">FIGURA MELIODAS NNT</h2>
                    <p class="info__txt">$150000</p>
                    <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>

                </article>
                <article class="info__columna">
                    <img src="img/afiche.jpg" alt="" class="info__img">
                    <h2 class="info__titulo">AFICHES</h2>
                    <p class="info__txt"> $7000</p>
                    <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>

                </article>
            </section>
           
        </div>
    </main>

    <section class="producto">
        <h2 class="section__titulo">NUESTROS PRODUCTOS</h2>
        
    </section>
    <footer class="footer">
       
        <p class="copy">&copy; MY GAME ZONE 2020-Todos los derechos son reservados</p>
    </footer>
    <script src="js/menu.js"></script>
</body>
</html>