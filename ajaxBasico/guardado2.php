<?php
//incrustamos la conexion de la bd
include('db.php');
//establecemos variables 
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
// se realiza la sentencia de sql
$consulta = "SELECT * FROM usuarios WHERE correo='$correo'";
$validacion = mysqli_query($conexion, $consulta);
$array = mysqli_fetch_array($validacion);

if (mysqli_num_rows($validacion) >= 1) {
    echo "Correo ya se encuentra registrado";
} else {
    $sql = "INSERT INTO usuarios (usuario,correo,contrasena) VALUES
('$usuario','$correo','$contrasena')";
    //valida si la conexion y la consulta son correctas
    $validacion = mysqli_query($conexion, $sql);

    echo "datos guardados correctamente";
}


// si la conexion es correcta, realiza el registro
// if($validacion){
//     echo "registro completado";
// }else{
//     echo "registro fallido";
// }