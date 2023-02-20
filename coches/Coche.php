<?php
/*
Necesitamos representar información de coches. Para cada coche registramos:

protected $ilindrada
protected $arca
protected $atrícula
protected $ipo combustible ("gasolina","gasoil","híbrido","eléctrico").
protected $olor

Registra 6 coches.
Setea el color de los coches en posiciones pares a "azul"
Setea el color de los coches en posiciones impares a "rojo".
Muestra los marca de los coches que tienen combustible de tipo "gasolina"
*/

class Coche {
    protected $cilindrada;
    protected $marca;
    protected $matricula;
    protected $combustible; // ("gasolina","gasoil","híbrido","eléctrico").
    protected $color;

    public function __construct($cilindrada,$marca,$matricula,$combustible,$color){
        $this->cilindrada = $cilindrada;
        $this->marca = $marca;
        $this->matricula = $matricula;
        $this->combustible = $combustible;
        $this->color = $color;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getCombustible(){
        return $this->combustible;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }


}



?>