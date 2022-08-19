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
// se cierra el php para utilizar html
foreach($producto as $productos){ ?>
    <li>
        <p>Producto:<?php echo $productos["nombre"];?></p>
        <p>Precio:<?php echo $productos["precio"];?></p>
        <?php //valida la llave del arreglo disponible, si es verdadera devuelve el primer mensaje, si es falsa, devuelve la segunda premisa ?>
        <p><?php echo ($productos["disponible"])?"disponible":"no disponible";?></p>
    </li>
<?php
}



include 'includes/footer.php';