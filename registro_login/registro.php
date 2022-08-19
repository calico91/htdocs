<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <title>Registro</title>
</head>
<body>
    <div class="contenedor">
        <div class="formulario">
            <form action="guardado.php" method="post">
                <h1>REGISTRA TUS DATOS</h1><br><br>
                <label for="">Ingresa un usuario</label><br>
                <input type="text" name="usuario"><br><br>
                <label for="">Ingresa tu correo</label><br>
                <input type="email" name="correo" id=""><br><br>
                <label for="">Ingresa una contraseña</label><br>
                <input type="password" name="contrasena" id=""><br><br>
                <button>REGISTRARSE</button>


            </form>
        </div>
    </div>
</body>
</html>