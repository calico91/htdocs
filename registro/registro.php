<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- contenedor principal: es la base de todo el html despues del body
    contenedor formulario: da forma al formulario y define limites 
    form: tiene todos los elementos de un formulario, metodo post
    los datos del formulario se envian al archivo guardado.php 
    -->
    <div class="principal">
        <div class="formulario">
            <form action="guardado.php" method="post">
                <div class="titulo">
                    <h1>Registrate</h1>
                </div>
                <label for="" class="lnombre">Ingresa tu Nombre</label><br>
                <input type="text" name="nombre" placeholder="Nombre"><br>
                <label for="" class="lcorreo">Ingresa un Correo</label><br>
                <input type="email" name="correo" placeholder="correo"><br>
                <label for="" class="lusuario">Ingresa un Usuario</label><br>
                <input type="text" name="usuario" placeholder="usuario"><br>
                <label for="" class="lcontrasena">Ingresa una Contraseña</label><br>
                <input type="password" name="contrasena" placeholder="contraseña"><br>
                <button>Registrar</button>
            </form>
        </div>
    </div>
</body>
</html>