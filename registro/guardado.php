<?php
//incrustamos la conexion de la bd
include('db.php');
//establecemos variables 
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
// se realiza la consulta a bd
$sql = "INSERT INTO perfil(nombre,correo,usuario,contrasena) VALUES
                                ('$nombre','$correo','$usuario','$contrasena')";
//valida si la conexion y la consulta son correctas
$validacion = mysqli_query($conexion,$sql);
// si la conexion es correcta, realiza el registro
if($validacion){
    echo "registro completado";
}else{
    echo "registro fallido";
}