<?php


class Jugador {

    protected $nombre;
    protected $edad;
    protected $altura;
    protected $peso;
    protected $posicion; //Base,Escolta,Aler,Aler-Pivot,Pivot

    public function __construct($nombre,$edad,$altura,$peso,$posicion){
        $this->nombre = $nombre;
        $this->edad= $edad;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->posicion = $posicion;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getAltura(){
        return $this->altura;
    }

}





?>