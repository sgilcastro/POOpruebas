<?php
require("Coche.php");
//$cilindrada,$marca,$matricula,$combustible,$color
    //"gasolina","gasoil","híbrido","eléctrico"

    //

$coches = array();

$coche1 = new Coche(75,"Ford","PR2345","gasolina","blanco");

var_dump($coche1);
echo "<br><br>";

$coche1->crearCoche();

var_dump($coche1->crearCoche());
echo "<br><br>";

$coche2 = new Coche(75,"Ford","2345BCD","gasolina","naranja");
$coche3 = new Coche(100,"Kia","1234KNE","hibrido","rojo");
$coche4 = new Coche(60,"Nissan","4567GHE","gasolina","amarillo");
$coche5 = new Coche(80,"Hyundai","8123RNW","electrico","verde");
$coche6 = new Coche(125,"Ford","3456KYH","gasoil","gris");


$coches = [
    $coche1->crearCoche(),
    $coche2->crearCoche(),
    $coche3->crearCoche(),
    $coche4->crearCoche(),
    $coche5->crearCoche(),
    $coche6->crearCoche()
];

var_dump($coches);
echo "<br><br>";

var_dump($coches[1]);
echo "<br><br>";

var_dump($coches[0]['color']);
echo "<br><br>";

var_dump($coches[1]['color']);
echo "<br><br>";

var_dump($coches[2]['color']);
echo "<br><br>";

$coches[2]['color'] = "azul";

echo $coches[2]['marca']." ahora es ". $coches[2]['color'];
echo "<br><br>";

print_r($coche3);

$coche3->setColor('azul');

/*




$coches = [
    $coche1->crearCoche(),
    $coche2->crearCoche(),
    $coche3->crearCoche(),
    $coche4->crearCoche(),
    $coche5->crearCoche(),
    $coche6->crearCoche()
]
*/

?>