<?php

require_once ("Tarifa.php");

class TarifaVehiculo extends Tarifa {
    var $pma;
    
    function __construct ($precio, $pma) {
        parent :: __construct($precio);
        $this->pma = $pma;
        
    }

    function setPma($pma) {
        $this->pma = $pma;
    }
    
    function getPma() {
        return $this->pma;
    }

    function mostrar () {
        parent:: mostrar ();
        echo "si el camión pesa más de ".$this->getPma()." kilos.";
    }
}