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

<h1>Listado de coches antes del cambio de color</h1>

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

//setear coches posicion par a azul
$objeto1->setColor('azul');
$objeto3->setColor('azul');
$objeto5->setColor('azul');

$objeto2->setColor('rojo');
$objeto4->setColor('rojo');
$objeto6->setColor('rojo');

$coches = [
    $objeto1->crearArrayCoche(), 
    $objeto2->crearArrayCoche(),
    $objeto3->crearArrayCoche(),
    $objeto4->crearArrayCoche(),
    $objeto5->crearArrayCoche(),
    $objeto6->crearArrayCoche()
    ];
?>

<h1>Listado de coches despues del cambio de color</h1>
    
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
?>

<h1>Coches con combustible tipo gasolina</h1>

<?php
$x = count($coches);
//echo $x.'<br>;

$i=0;
while($i<$x){
    if($coches[$i]['combustible']=='gasolina'){
        echo $coches[$i]['marca']. "<br>";
        $i++;
    } else {
        $i++;
    }
}
echo'<br><br>';

/*
for($i=0; $i<$x;$i++){
    if($coches[$i]['combustible']=='gasolina'){
        echo $coches[$i]['marca']. "<br>";
    } else {
    }
}

*/



?>