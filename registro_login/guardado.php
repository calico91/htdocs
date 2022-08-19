<?php
//incrustamos la conexion de la bd
include('db.php');
//establecemos variables 
$usuario=$_POST['usuario'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
// se realiza la consulta a bd
$sql = "INSERT INTO usuarios (usuario,correo,contrasena) VALUES
                                ('$usuario','$correo','$contrasena')";
//valida si la conexion y la consulta son correctas
$validacion = mysqli_query($conexion,$sql);
// si la conexion es correcta, realiza el registro
if($validacion){
    echo "registro completado";
}else{
    echo "registro fallido";
}