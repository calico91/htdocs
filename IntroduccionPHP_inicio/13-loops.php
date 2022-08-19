<?php include 'includes/header.php';

//while 
$i=0;
while ($i<10){
    echo $i."<br>";
    $i++;
}
echo "<br>";
// dowhile
$j=0;
do{
    echo $j."<br>";
    $j++;
}while ($j>10);

//for 
/*
 si es multiplo de 3 imprimir fizz
 si es multiplo de 5 imprimir buzz
 si es multiplo de 3 y 5 imprimir fizz buzz
 */


for($x=1;$x<50;$x++){
        if($x % 3 === 0 && $x % 5 ===0){
            echo $x."-- FizzBuzz<br>";
        }
        elseif($x % 3 === 0){
            echo $x."-- Fizz<br>";
        }
        elseif($x % 5 === 0){
            echo $x."-- Buzz<br>";
        }
}
//foreach
$clientes = array("cris","ti","an");
foreach($clientes as $cliente){// se reonombra la variable y a ese se dan los valores del arreglo
    echo $cliente."<br>";
}

$cliente =[
    "nombre"=> "Isma",
    "saldo" => 300,
    "tipo" => "Premiun"
];
foreach ($cliente as $key=>$valor){
    echo $key."-".$valor."<br>";
}

include 'includes/footer.php';