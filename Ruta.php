<?php

class Ruta {
    var $origen;
    var $destino;
    var $ferry;
    var $precio;
    var $duracion;

    function __construct ($origen, $destino, $ferry, $precio, $duracion) {
        $this->origen = $origen;
        $this->destino = $destino;
        $this->ferry = $ferry; 
        $this->precio = $precio;
        $this->duracion = $duracion;
    }

    function setOrigen ($origen) {
        $this->origen = $origen;
    }

    function getOrigen () {
        return $this->origen;
    }

    function setDestino ($destino) {
        $this->destino = $destino;
    }

    function getDestino () {
        return $this->destino;
    }

    function setferry ($ferry) {
        $this->ferry = $ferry;
    }

    function getferry () {
        return $this->ferry;
    }

    function setPrecio ($precio) {
        $this->precio = $precio;
    }

    function getPrecio () {
        return $this->precio;
    }

    function setDuracion ($duracion) {
        $this->duracion = $duracion;
    }

    function getDuracion () {
        return $this->duracion;
    }

    function mostrar () {
        echo "<br> Ruta con origen en ".$this->getOrigen ()." y destino en ".$this->getDestino ().". ";
            $this->ferry->mostrar();
        echo ". Precio base: ".$this->getPrecio ()."euros. Duración: ".$this->getDuracion ();
    }
}
