<?php
include("db.php");
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

//$logueo = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'";

$resultado = $mysqli->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'");
$fila = $resultado->fetch_assoc();

if (isset($fila)) {
    header('location:bienvenido.php');
} else {
    echo "usuario o contraseña incorreta";
}
