<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="contenedor">
        <div class="formulario">
            <form action="validacion.php" method="post" id="form">
                <h1>INGRESO</h1><br><br>
                <label for="">Correo</label><br><br>
                <input type="email" name="correo" id=""><br><br>
                <label for="">Contraseña</label><br><br>
                <input type="password" name="contrasena"><br><br>
                <button>INGRESAR</button>
            </form>
        </div>
    </div>
</body>
</html>