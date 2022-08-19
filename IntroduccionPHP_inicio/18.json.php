<?php include 'includes/header.php';

$producto=[
    [
    "nombre"=>"TV",
    "precio"=>500,
    "disponible"=>true
    ],
    [
    "nombre"=>"Celu",
    "precio"=>600,
    "disponible"=>true
    ],
    [
    "nombre"=>"Reloj",
    "precio"=>700,
    "disponible"=>false
    ]
];
//enconde converte un arreglo a String
$json = json_encode($producto, JSON_UNESCAPED_UNICODE);//se utiliza que reconozca caracteres con tildes
var_dump($json);
echo "<br>";
$json_array= json_decode($json);//convierte string a arreglo
var_dump($json_array);




include 'includes/footer.php';