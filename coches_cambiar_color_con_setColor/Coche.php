<?php

class Coche{

    protected $cilindrada;
    protected $marca;
    protected $matricula;
    protected $combustible; 
    protected $color;

    //"gasolina","gasoil","híbrido","eléctrico"

    public function __construct($cilindrada,$marca,$matricula,$combustible,$color){
        $this->cilindrada = $cilindrada;
        $this->marca = $marca;
        $this->matricula = $matricula;
        $this->combustible = $combustible; 
        $this->color = $color;
    }
    
    public function setColor($color){
        $this->color=$color;
    }
    
    public function crearArrayCoche(){
        return get_object_vars($this);
    }

}


?>