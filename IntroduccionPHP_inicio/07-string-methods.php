<?php include 'includes/header.php';
$nombreCliente="Ismael Blandon";
//conocer ext de un String
echo strlen($nombreCliente);
var_dump($nombreCliente);
echo "<br>";

//eliminar espacios en blanco al inicio y al final
$sinEspacios= trim($nombreCliente);
echo trim($nombreCliente);
echo "<br>";
//convertirlo a mayuscula
echo strtoupper($nombreCliente);
echo "<br>";
//convertirlo a minuscula, se utiliza convertir correos 
echo strtolower($nombreCliente);
echo "<br>";

$email1="correo@correo.com";
$email2="Correo@correo.com";
var_dump(strtolower($email1)===strtolower($email1));
echo "<br>";
echo str_replace("Ismael","Ismaelito",$nombreCliente);
echo "<br>";
//revisar si un String existe, si existe arroja la posicion en la que esta
echo strpos($nombreCliente,"Isma");
echo "<br>";
//concatenar al imprimir
$tipoCliente="premiun";
echo "el cliente ".$sinEspacios." es ".$tipoCliente;//forma de mas uso
echo "<br>";
echo "el cliente {$nombreCliente} es {$tipoCliente}";


include 'includes/footer.php';