<?php include 'includes/header.php';

$cliente = [];
$cliente2 = array();
$cliente3 = array("pedro","juan","carlos");
$cliente4 =[
    "nombre"=>"Isma",
    "saldo"=>500,
];
// Empty - revisa si un arreglo esta vacio, return bool
var_dump(empty($cliente));
var_dump(empty($cliente1));
var_dump(empty($cliente2));
var_dump(empty($cliente3));
echo "<br>";
// isset - revisa si un arreglo esta creado o una propiedad, return bool
var_dump(isset($cliente));
var_dump(isset($cliente2));
var_dump(isset($cliente3));
var_dump(isset($cliente4));
echo "<br>";
// isset - revisa si un arreglo esta creado o una propiedad, return bool
var_dump(isset($cliente4["nombre"]));
var_dump(isset($cliente4["codigo"]));
include 'includes/footer.php';