<?php

require_once ("Vehiculo.php");

class VehiculoCamion extends Vehiculo {
    var $PMA;
    var $tara;

    function ___construct ($marca, $PMA, $tara){
        parent:: __construct ($marca);
        $this->PMA = $PMA;
        $this->tara = $tara;
    }

    function setPMA ($PMA){
        $this->PMA = $PMA;
    }

    function getPMA (){
        return $this->PMA;
    }

    function setTara ($tara){
        $this->tara = $tara;
    }

    function getTara (){
        return $this->tara;
    }

    function mostrar (){
        echo "Camión. "; 
        parent:: mostrar ();
        echo "PMA: ".$this->getPMA ()." Tara: ".$this-getTara ();
    }

    function tarifaCamion () {
    }
}