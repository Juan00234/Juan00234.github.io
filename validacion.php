<!DOCTYPE html>
<html lang="es">
<head>

<title>Restaurar contraseña</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilosconex.css">
    <link rel="icon" href="img/loogin.jpg">
</head>

<body>
<div class="formulario">
    <form method="post" class="formulario" id="formulario">
         <h1>RESTAURAR CONTRASEÑA</h1>
         
                <label>E-mail</label>
				<input class="cajadetexto" type="text" name="email" placeholder="example@email.com" required>

                <label>Usuario</label>
				<input class="cajadetexto" type="text" name="usuario" placeholder="Usuario" required>


                <input class="boton" type="submit" value="Registrar" name="register">
        <br>

        <a href="login.php" style="float: right"> REGRESAR</a>
    </form>
</div>
    <?php 
    include("registrarconex.php");
     ?>
</body>
</html>