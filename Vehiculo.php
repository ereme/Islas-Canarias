<?php

class Vehiculo {
    var $marca;

    function ___construct ($marca){
        $this->marca = $marca;
    }

    function setMarca ($marca){
        $this->marca = $marca;
    }

    function getMarca (){
        return $this->marca;
    }

    function mostrar (){
        echo "Marca: ".$this->getMarca ();
    }
}