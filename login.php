<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Formulario de Acceso</title>

	<link rel="icon" href="img/fondo2.png">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	
	<div id="contenedor">
		<div id="contenedorcentrado">
		<div id="login">
			<form id="loginform">
				<label for="Usuario" >Usuario</label>
				<input id="Usuario" type="text" placeholder="Usuario" name="usuario" required>

				<label for="password">Contraseña</label>
				<input id="password" type="password" placeholder="Contraseña" name="password" required>

				<button type="submit" title="Ingresar" name="Ingresar"> Inicio de Sesion</button>
			</form>
			
		</div>

		<div id="derecho">
			<div class="titulo">
				Bienvenido
			</div>
			<hr>
			<div class="pie-form">
				<a href="validacion.php">¿Perdiste tu contraseña?</a>
				<a href="registrar.php">¿No tienes cuenta? Registrate</a>
				<hr>
				<a href="indexx.php"> << Volver </a>
			</div>
		</div>
	</div>
	
</body>
</html>