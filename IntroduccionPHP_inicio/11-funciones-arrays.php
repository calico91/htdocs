<?php include 'includes/header.php';
// in_array- buscar elementos de un arreglo, return bool
$carrito=["tablet","pc","tv"];
var_dump(in_array("tablet",$carrito));
var_dump(in_array("audifonos",$carrito));
echo "<br>";
// ordenar arreglo
$numeros=[1,4,3,5,5,6,7,3,5];
sort($numeros);// menor a mayor
rsort($numeros);// mayor a menor 
echo "<pre>";
var_dump($numeros);
echo "</pre>";
// ordenar arreglos asociativos
$cliente = array(
    "saldo"=>500,
    "tipo"=>"Premiun",
    "nombre"=>"Isma"
);
echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente);//ordena por valores (alfabetico)
//ksort($cliente);//ordena por llaves (alfabeticoA-Z)
//krsort($cliente);//ordena por llaves (alfabetico Z-A)

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';