<?php include 'includes/header.php';
$cliente =[
    "nombre"=>"Isma",
    "saldo"=>500,
    "informacion"=>[
        "tipo"=>"premiun",
        "disponible"=>100
    ]
    ];
echo "<pre>";
var_dump($cliente);
echo "</pre>";
//echo $cliente["nombre"];
//echo $cliente["informacion"]["disponible"];


include 'includes/footer.php';