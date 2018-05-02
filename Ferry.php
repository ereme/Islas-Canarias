<?php

class Ferry {
    var $id;
    var $asientosLibresPasajero;
    var $plazasLibresVehiculos;

    function __construct ($id, $asientosLibresPasajero, $plazasLibresVehiculos) {
        $this->id = $id;
        $this->asientosLibresPasajero = $asientosLibresPasajero;
        $this->plazasLibresVehiculos = $plazasLibresVehiculos; 
    }
 
    function setId ($id) {
        $this->id = $id;
    }

    function getId () {
        return $this->id;
    }

    function setAsientosLibresPasajero ($asientosLibresPasajero) {
        $this->asientosLibresPasajero = $asientosLibresPasajero;
    }

    function getAsientosLibresPasajero () {
        return $this->asientosLibresPasajero;
    }

    function setPlazasLibresVehiculos ($plazasLibresVehiculos) {
        $this->plazasLibresVehiculos = $plazasLibresVehiculos;
    }

    function getPlazasLibresVehiculos () {
        return $this->plazasLibresVehiculos;
    }

    function mostrar () {
        echo "<br> Ferry: ".$this->getId ().". Plazas libres de pasajeros: ".$this->getAsientosLibresPasajero ().". Plazas libres de vehiculos: ".$this->getPlazasLibresVehiculos();
    }
}
