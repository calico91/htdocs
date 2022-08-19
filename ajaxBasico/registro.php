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
            <form method="post" id="form">
                <h1>REGISTRA TUS DATOS</h1><br><br>
                <label for="">Ingresa un usuario</label><br>
                <input type="text" name="usuario" id="usuario"><br><br>
                <label for="">Ingresa tu correo</label><br>
                <input type="email" name="correo" id="correo"><br><br>
                <label for="">Ingresa una contraseña</label><br>
                <input type="password" name="contrasena" id="contrasena"><br><br>
                <button type="submit" id="enviar">REGISTRARSE</button>
                <button type="button" id="ingresar" onclick="location.href='login.php'">>INGRESAR</button>
                <p class="warnings" id="warnings"></p>
            </form>
        </div>
    </div>
</body>
<script src="jquery-2.1.4.min.js"></script>
<script src="registro.js"></script>

</html>