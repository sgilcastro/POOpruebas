<?php
require("Coche.php");
/*
Necesitamos representar información de coches. Para cada coche registramos:

* Cilindrada
* Marca
* Matrícula
* Tipo combustible ("gasolina","gasoil","híbrido","eléctrico").
* Color

Registra 6 coches.
Setea el color de los coches en posiciones pares a "azul"
Setea el color de los coches en posiciones impares a "rojo".
Muestra los marca de los coches que tienen combustible de tipo "gasolina"
*/

//$cilindrada,$marca,$matricula,$combustible,$color

$coches = [];

$coche1 = new Coche(75,"Ford","PR2345","gasolina","amarillo");
$coche2 = new Coche(75,"Nissan","PR2346","gasoil","blanco");
$coche3 = new Coche(75,"Hyundai","PR2347","hibrido","negro");
$coche4 = new Coche(75,"Tesla","PR2348","electrico","verde");
$coche5 = new Coche(75,"Renault","PR2349","gasolina","rosa");
$coche6 = new Coche(75,"BMW","PR2350","gasoil","naranja");

//var_dump($coche1).'<br><br>';

$coches = [$coche1,$coche2,$coche3,$coche4,$coche5,$coche6];

//var_dump($coches).'<br><br>';

//echo $coches[0]->getMarca().'<br><br>';


//$coches[0]->setColor('rojo');

//var_dump($coche1).'<br><br>';


$x = count($coches);

for($i=0;$i<$x;$i++){
    //echo $i.'<br><br>';
    if ($i % 2 == 0) {
        $coches[$i]->setColor('rojo');
    } else {
        $coches[$i]->setColor('azul');
    }
}
?>

<p>Marcas que tienen coche a gasolina:</p>

<?php
for($i=0;$i<$x;$i++){
    //echo $i.'<br><br>';
    if ($coches[$i]->getCombustible() == 'gasolina') {
        echo '- '.$coches[$i]->getMarca();
        echo '<br>';
    }
}

//var_dump($coches);


?>