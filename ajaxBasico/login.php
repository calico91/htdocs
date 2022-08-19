<?php
session_start();
if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 'true') {
    header("Location:ingresoCorrecto.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">

    <title>Login</title>
</head>

<body>
    <div class="contenedor">
        <form action="sqlLogin.php" method="POST" id="form">
            <h1>INGRESO</h1><br><br>
            <label for="">Correo</label><br><br>
            <input type="email" name="correo" id="correo"><br><br>
            <label for="">Contraseña</label><br><br>
            <input type="password" name="contrasena" id="contrasena"><br><br>
            <button type="submit" id="enviar">INGRESAR</button>
            <div>
                <div id="registrar">Si no estas registrado ingresa aqui</div>
            </div>
            <p class="alertas" id="alertas"></p>
        </form>
    </div>
</body>
<script src="jquery-2.1.4.min.js"></script>
<script src="login2.js"></script>
<!-- <script>
    $('#enviar').click(function() { //enviar hace referencia al id del boton
        $.ajax({
            url: 'datos.php', //donde se direcciona
            type: 'POST', //Metodo como se envia
            data:{
                correo: $('#correo').val(),
                contrasena: $('#contrasena').val()

            },//envia los datos del form como un array
            success: function(res) { //se crea funcion para enviar respuesta si es todo es correcto
                $('#respuesta').html(res);
            },

        });
    });
</script> -->

</html>