<?php

class Tarifa {
    var $precio;

    function __construct ($precio) {
        $this->precio = $precio;
    }

    
    public function setPrecio($precio) {
        $this->precio = $precio;
    }
        
    public function getPrecio() {
        return $this->precio;
    }

    function mostrar () {
        echo "<br>Son ".$this->getPrecio()."  euros ";
    }
}