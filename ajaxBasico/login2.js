$(document).ready(function () {
    $('#registrar').on('click',()=>{
        $('#formulario').load('registro.php')
    });
 });

form.addEventListener("submit", e => {
    e.preventDefault();//previene los eventos por default, deja la pagina estatica
    $.ajax({
        url: 'sqlLogin.php', //donde se direcciona
        type: 'POST', //Metodo como se envia
        data: {
            correo: $('#correo').val(),
            contrasena: $('#contrasena').val()
        },
        success: function (res) { //se crea funcion para enviar respuesta si es todo es correcto
            if (res === 'ok') {
                $('#formulario').load('ingresoCorrecto.php');

            } else
                $('#alertas').html(res);
        },
    });

    //parrafo.innerHTML = "Datos registrados"

})