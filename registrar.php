<!DOCTYPE html>
<html lang="es">
<head>

<title>Registrar usuario</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilosconex.css">
    <link rel="icon" href="img/loogin.jpg">
    <link rel="stylesheet" href="estilosconex.css">
</head>

<body>

<div id="fondo">
<div class="formulario">
    <form method="post">
         <h1>REGISTRO</h1>

                <label>E-mail</label>
				<input class="cajadetexto" type="text" name="email" placeholder="example@email.com" required>

                <label>Usuario</label>
				<input class="cajadetexto" type="text" name="usuario" placeholder="Usuario" required>

				<label>Contraseña</label>
				<input class="cajadetexto" type="password"  name="pass" placeholder="Contraseña"  required>

                <input class="boton" type="submit" value="Registrar" name="register">
        <br>

        <a href="login.php" style="float: right"> REGRESAR</a>
    </form>
</div>
</div>
    <?php 
    include("registrarconex.php");
     ?>
</body>
</html>