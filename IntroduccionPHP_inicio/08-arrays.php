<?php include 'includes/header.php';

$carrito = ["Tablet","TV","Celular"];
//util para ver el contenido de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";
// acceder a un elemento 
$carrito[2];
// añadir al final del array
array_push($carrito,"audifonos");
// añade al inicio
array_unshift($carrito,"Reloj");



include 'includes/footer.php';