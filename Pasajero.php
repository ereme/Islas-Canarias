<?php

class Pasajero {
    var $nombre;
    var $nif;
    var $fechanac;
    var $discapacidad;

    function __construct ($nombre, $nif, $fechanac, $discapacidad) {
        $this->nombre = $nombre;
        $this->nif = $nif;
        $this->fechanac = $fechanac;
        $this->discapacidad = $discapacidad;
    }

    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }

    function getNombre () {
        return $this->nombre;
    }

    function setNif ($nif) {
        $this->nif = $nif;
    }

    function getNif () {
        return $this->nif;
    }

    function setFechaNac ($fechanac) {
        $this->fechanac = $fechanac;
    }

    function getFechaNac () {
        return $this->fechanac; 
    }

    function setDiscapacidad ($discapacidad) {
        $this->discapacidad = $discapacidad;
    }

    function getDiscapacidad () {
        return $this->discapacidad;
    }

    function getEdad () {
        $now = new DateTime( date ('d-m-Y'));
        $fechanac = new DateTime($this->getFechaNac());
        $edad = $now->diff($fechanac);
        return $edad->y;
    }

    function mostrar () {
        echo "<br>Nombre: ".$this->getNombre().". NIF: ".$this->getNif().".". "Fecha de nacimiento: ".$this->getFechaNac().". Discapacidad: ".(($this->getDiscapacidad () == true) ? "SÍ" : "NO");
    }
}