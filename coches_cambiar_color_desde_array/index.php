<?php
require("Coche.php");
//$cilindrada,$marca,$matricula,$combustible,$color
    //"gasolina","gasoil","híbrido","eléctrico"

    //

$objeto1 = new Coche(75,"Ford","PR2345","gasolina","blanco");
$objeto2 = new Coche(75,"Ford","2345BCD","gasolina","naranja");
$objeto3 = new Coche(100,"Kia","1234KNE","hibrido","rojo");
$objeto4 = new Coche(60,"Nissan","4567GHE","gasolina","amarillo");
$objeto5 = new Coche(80,"Hyundai","8123RNW","electrico","verde");
$objeto6 = new Coche(125,"Ford","3456KYH","gasoil","gris");

$coches = [
$objeto1->crearArrayCoche(), 
$objeto2->crearArrayCoche(),
$objeto3->crearArrayCoche(),
$objeto4->crearArrayCoche(),
$objeto5->crearArrayCoche(),
$objeto6->crearArrayCoche()
];

?>

<h1>Cambiar el color de los coches en posicion pares</h1>
<p>Considerando la posición 0 como par.</p>

<?php
/*
print_r($coches[0]);
echo'<br><br>';

echo $coches[0]['color'];
echo'<br><br>';
*/

$x = count($coches);
//echo $x.'<br><br>';

for($i=1; $i<=$x;$i=$i+2){
    //echo $i;
    echo "El coche en posición ".($i-1)." con matricula ". $coches[$i-1]['matricula']." era ".$coches[$i-1]['color'];
    $coches[$i-1]['color'] = 'rojo';
    echo " y ahora es ".$coches[$i-1]['color']. ".<br>";
}

?>

<h1>Cambiar el color de los coches en posicion impares</h1>

<?php


for($i=2; $i<=$x;$i=$i+2){
    //echo $i;
    echo "El coche en posición ".($i-1)." con matricula ". $coches[$i-1]['matricula']." era ".$coches[$i-1]['color'];
    $coches[$i-1]['color'] = 'azul';
    echo " y ahora es ".$coches[$i-1]['color']. ".<br>";
}
?>

<h1>Coches con combustible tipo gasolina</h1>

<?php
/*
while($i<$x){
    if($coches[$i]['combustible']=='gasolina'){
        echo $coches[$i]['marca']. "<br>";
        $i++;
    } else {
        $i++;
    }
}
*/

for($i=0; $i<$x;$i++){
    if($coches[$i]['combustible']=='gasolina'){
        echo $coches[$i]['marca']. "<br>";
    } else {
    }
}
echo'<br><br>';
?>

<h1>Listado final de coches </h1>
<p>(Foreach indicando la posición)</p>
<?php
$n=0;
foreach ($coches as $coche) {
    echo 'Coche en posición '. $n.".<br>";
    $n++;
    foreach ($coche as $etiqueta => $valor) {
        echo $etiqueta.": ".$valor . '<br>';
     }
     echo'<br>';
} 
echo'<br><br>';

?>
