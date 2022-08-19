<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1>$numero2);
echo "<br>";
var_dump($numero1<$numero2);
echo "<br>";
var_dump($numero1>=$numero2);
echo "<br>";
var_dump($numero1<=$numero2);
echo "<br>";
var_dump($numero2==$numero3);
echo "<br>";
var_dump($numero2==$numero4);
echo "<br>";
//revisa si el valor y tipo de dato son iguales
var_dump($numero2===$numero4);
echo "<br>";
// si el numero de la izquierda es mejor devuelve un -1 si es igual 0 si es mayor 1 
var_dump($numero1<=>$numero2);
echo "<br>";
var_dump($numero3<=>$numero2);
echo "<br>";
var_dump($numero2<=>$numero1);
echo "<br>";


include 'includes/footer.php';