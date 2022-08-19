<?php
declare (strict_types=1); 
include 'includes/header.php';

function usuarioAutenticado(bool $aut ) : ?String{//inidica que tipo de dato debe retornar la funcion
    if($aut){
        return"usuario autenticado";
    }else{
        return "no autenticado";
    }
}
$usuario = usuarioAutenticado(true);
echo $usuario;


include 'includes/footer.php';