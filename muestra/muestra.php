<?php
include('db.php');//incluimos la conexion de la bd
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>muestra</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- 
        contenedor principal: es la base de toda la estructura del html despues del body 
        contenedor tabla: sirve para dar forma a la tabla para mostrar datos
        contenedor titulo: sirve como base para el titulo de la tabla
        contenedor table: espeficica la tabla donde se mostraran los datos 
    -->
    <div class="principal">
        <div class="tabla">
            <div class="titulo">
                <h1>Usuarios Registrados</h1>
            </div>
            <table>
                <tr>
                    <td>Usuario</td>
                    <td>Descripcion</td>
                    <td>Rango</td>
                </tr>
                <?php
                // hacemos la consulta a la bd 
                $sql = "SELECT*FROM usuarios";  
                //validamos la conexion y los datos para verificar si se han guardado correctamente
                $validacion = mysqli_query($conexion,$sql);
                // iniciamos el ciclo y en su sentencia pondre el numero de registros de la bd
                // el ciclo no termina hasta despues de establecer los campos de la tabla y con echo 
                // imprimos los datos guardados en el array 
                while($muestra=mysqli_fetch_array($validacion)){
                    
                ?>
                <tr>
                    <td><?php echo $muestra[ 'usuario' ] ?> </td>
                    <td><?php echo $muestra[ 'descripcion' ] ?> </td>
                    <td><?php echo $muestra[ 'rango' ] ?> </td>
                    <?php } ?>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>