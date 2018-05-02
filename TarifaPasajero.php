<?php

require_once ("Tarifa.php");

class TarifaPasajero extends Tarifa {
    var $edad;
    
    function __construct ($precio, $edad) {
        parent :: __construct($precio);
        $this->edad = $edad;
        
    }

    function setEdad($edad){
        $this->edad = $edad;
    }
    
    function getEdad() {
        return $this->edad;
    }

    function mostrar () {
        parent:: mostrar ();
        echo "si el pasajero tiene más de ".$this->getEdad()." años.";
    }
    
} 