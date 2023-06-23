<?php 

include("conexion_JJCV.php");
if (isset($_POST['register'])){
if (strlen($_POST['usuario'])>= 1 && strlen($_POST['pass'])>=1 && strlen($_POST['email'])>=1){

    $email = trim($_POST['email']);
    $usuario = trim($_POST['usuario']);
    $pass = trim($_POST['pass']);
    $consulta = "INSERT INTO login(email, usuario, password) VALUES ('$email','$usuario', '$pass')";
    $resultado = mysqli_query($conex ,$consulta);
    if($resultado) {
        ?>
        <h3 class="ok"> ¡Te has inscrito correctamente!</h3>
        
        <?php 
    }else{
        ?>
        <h3 class="bad">¡Ups ha ocurrido un error!</h3>
        <?php 
    }
}
}
?>