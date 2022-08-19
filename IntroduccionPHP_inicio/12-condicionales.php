<?php include 'includes/header.php';

$autenticado = true;
$admin = true;

if ($autenticado && $admin){
    echo "usuario autenticado";
}else{
    echo "fallo autenticacion";
}

$cliente =[
    "nombre"=>"Isma",
    "saldo"=>500,
    "informacion"=>[
        "tipo"=>"premiun",
        "disponible"=>100
    ]
];
echo "<br>";

if (!empty($cliente)){ // valida si el arreglo tiene datos
    echo "el arreglo de cliente no esta vacio<br>";

    if($cliente["saldo"]>0){
        echo "el cliente tiene saldo disponible";
    }else{
        echo "no hay saldo";
    }
} else{
    echo "no hay datos para mostrar";
}
$tecnologia="PHP";
switch($tecnologia){
    case "PHP":
        echo "<br>PHP es sabroso";
        break;
    default:
        echo "otro lenguaje desconocido";
        break;
}


include 'includes/footer.php';