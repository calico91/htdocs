const usuario = document.getElementById("usuario");
const correo = document.getElementById("correo");
const contrasena = document.getElementById("contrasena");
const form = document.getElementById("form");
const parrafo = document.getElementById("warnings");

form.addEventListener("submit", e=>{
    e.preventDefault();//previene los eventos por default, deja la pagina estatica
    let warnings ="";
    let entrar = false
    let validaremail =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ 
    parrafo.innerHTML = ""
    if(usuario.value.length <6){ //valida cantidad de caractes
    warnings += 'el nombre de usuario debe tener minimo 6 caracteres<br>';
    entrar=true
    }
    if(!validaremail.test(correo.value)){ //valida que el campo de correo no tenga ningno caracteres de validaremail
        warnings += 'el correo no es valido<br>';
        entrar=true
    }
    if(contrasena.value.length < 8){
        warnings += 'la contraseña debe tener minimo 8 caracteres<br>';
        entrar=true
    }
    if(entrar){
        parrafo.innerHTML = warnings
    }else{
        $.ajax({
            url: 'guardado2.php', //donde se direcciona
            type: 'POST', //Metodo como se envia
            data: {
                usuario: $('#usuario').val(),
                correo: $('#correo').val(),
                contrasena: $('#contrasena').val()
            },
             success: function (res) { //se crea funcion para enviar respuesta si es todo es correcto
                 $('#warnings').html(res);
             },
    
        });

        //parrafo.innerHTML = "Datos registrados"
            
            }
})

