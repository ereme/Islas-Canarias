<?php

class Oficina {
    var $ciudad;
    var $cp;

    function __construct ($ciudad, $cp) {
        $this->ciudad = $ciudad;
        $this->cp = $cp;
    }

    function setCiudad ($ciudad) {
        $this->ciudad = $ciudad;
    }

    function getCiudad () {
        return $this->ciudad;
    }

    function setCp ($cp) {
        $this->cp = $cp;
    }

    function getCp () {
        return $this->cp;
    }

    function mostrar () {
        echo "<br> Oficina de ".$this->getCiudad (). " CP: ".$this->getCp ();
    }
}