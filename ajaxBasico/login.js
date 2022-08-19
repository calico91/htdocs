$(document).ready(function () {
    cargarEventosForma();
});

function cargarEventosForma() {
    $('#enviar').on('click', enviarDatosFormulario);
}

function enviarDatosFormulario() {
    $.ajax({
        url: 'datos.php', //donde se direcciona
        type: 'POST', //Metodo como se envia
        data: {
            correo: $('#correo').val(),
            contrasena: $('#contrasena').val()
        },
         success: function (res) { //se crea funcion para enviar respuesta si es todo es correcto
             $('#respuesta').html(res);
         },

    });
}
