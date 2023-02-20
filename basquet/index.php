<?php
/* 
Necessitem enregistrar informació de jugadors de basket.

Nom,Edad,Alçada,Pes,Posició(Base,Escolta,Aler,Aler-Pivot,Pivot)

Enregistrarem informació d'un conjunt de jugadors(8 en total).

Mostra el nom i l'alçada dels jugadors que pasen dels 2 metres d'alçada.
Mostra el nom i l'edad dels jugadors que tenen menys de 21 anys.
*/

require("Jugador.php");

$jugadores = [];

$jugador1 = new Jugador("Pepe",22,2.10,85,"Alero");
$jugador2 = new Jugador("Antonio",18,1.91,75,"Pivot");
$jugador3 = new Jugador("Frank",22,2.10,85,"Alero");
$jugador4 = new Jugador("Jose",19,2.00,75,"Pivot");
$jugador5 = new Jugador("Marcelo",22,1.99,75,"Pivot");
$jugador6 = new Jugador("Luis",27,1.98,75,"Pivot");
$jugador7 = new Jugador("Sergio",25,2.05,75,"Pivot");
$jugador8 = new Jugador("Juan Carlos",20,2.10,75,"Pivot");

//var_dump($jugador1);
//echo '<br><br>';

$jugadores =[$jugador1,$jugador2,$jugador3,$jugador4,$jugador5,$jugador6,$jugador7,$jugador8];


//var_dump($jugadores);
/*
echo '<br><br>';
echo $jugadores[0]->getNombre();
echo '<br><br>';
echo $jugadores[0]->getEdad();
echo '<br><br>';
echo $jugadores[0]->getAltura();
echo '<br><br>';
echo $jugadores[1]->getNombre();
echo '<br><br>';
echo $jugadores[1]->getEdad();
echo '<br><br>';
echo $jugadores[1]->getAltura();
echo '<br><br>';
*/

$x = count($jugadores);
//echo $x."<br><br>";

echo "Jugadores menores de 21 años:<br><br>";
for ($i=0;$i<$x;$i++){
    //echo $i."<br>";
    if ($jugadores[$i]->getEdad()<21){
        echo $jugadores[$i]->getNombre(). " tiene ". $jugadores[$i]->getEdad()." años.<br>"; 
    }
}
echo "<br><br>Jugadores más altos de 2 metros:<br><br>";
for ($i=0;$i<$x;$i++){
    //echo $i."<br>";
    if ($jugadores[$i]->getAltura()>2.00){
        echo $jugadores[$i]->getNombre(). " mide ". $jugadores[$i]->getAltura()." metros.<br>"; 
    }
}


?>