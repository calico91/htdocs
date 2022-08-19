<?php
include('db.php');
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
session_start();
$_SESSION['correo'] = $correo;
$consulta = "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'";
$validacion = mysqli_query($conexion, $consulta);
$array = mysqli_fetch_array($validacion);

if (mysqli_num_rows($validacion) != 1) {
    echo "Correo o contraseña incorrecta";
} else {
    $_SESSION['logueado'] = 'true';
    echo 'ok';
}
