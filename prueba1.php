<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN Y REGISTRO</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="principal_prueba1.css">
</head>

<header class="topheader">
        <nav class="topnav">
            <a href="#" class="logo">
                <img
                height="95"
                width="95"
                src="img/jilo1.png" 
                alt="turismo">
                <div>
                Amor De Mis Amores
                </div>
            </a>
            <button class="open-menu" aria-label="Abrir menú">
                <img src="img/icono-menú.png" alt="abrir menú" width="50" height="50">
            </button>
            <ul class="menu">
                <button class="close-menu" aria-label="Cerrar menú">
                    <img src="img/cerrar.png" alt="abrir menú" width="50" height="50">
                </button>
                <li><a href="indexin.php" class="">Home</a></li>
                <li><a href="login.php" class="">Inicio de Sesión</a></li>
                <li><a href="hospedaje.php" class="">Hospedaje</a></li>
                <li><a href="restaurantes.php" class="">Restaurantes</a></li>
                <li><a href="bares.php" class="">Bares</a></li>
                <li><a href="centrosRecreativos.php" class="">Centros Recreativos</a></li>
                <li><a href="historia.php" class="">Historia</a></li>
            </ul>
        </nav>
      </header> 

<body>


    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿YA TIENES CUENTA?</h3>
                    <p>Inicia Sesión Para Entrar en la Página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                        <h3>¿AÚN NO TIENES CUENTA?</h3>
                        <p>Resgístrate Para Facilitar La Sesión</p>
                        <button id="btn__registrarse">Registrar</button>
                </div>
            </div>
            <!--Formulaio  de login y registro-->
            <div class="contenedor__login-register">
                <!--Formulaio  de login-->
                <form action="" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>
                <!--Formulaio  de registro-->
                <form action="registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>
            </div>

    </main>
    <script src="js/script.js"></script>


</body>
</html>