<?php



class Agencia {
    var $nombre;
    var $ferrys;
    var $rutas;
    var $oficinas;
    var $tarifapasajeros;
    var $tarifavehiculos;

    function __construct ($nombre) {
        $this->nombre = $nombre;
        $this->ferrys = array ();
        $this->rutas = array ();
        $this->oficinas = array ("HIERO", "PALMA", "GOMERA", "TENERIFE", "GRAN CANARIA", "FUERTEVENTURA", "LANZAROTE");
        $this->tarifapasajeros = array (new TarifaPasajero(10,5), 
                                        new TarifaPasajero (11,10), 
                                        new TarifaPasajero(12,15), 
                                        new TarifaPasajero(13,30), 
                                        new TarifaPasajero(14,45), 
                                        new TarifaPasajero(15,60), 
                                        new TarifaPasajero(16,70), 
                                        new TarifaPasajero(17,80));
        $this->tarifavehiculos = array (new TarifaVehiculo (10, 1500),
                                        new TarifaVehiculo (11,2000),
                                        new TarifaVehiculo (12,2500),
                                        new TarifaVehiculo (13,2500),
                                        new TarifaVehiculo (14,3000),
                                        new TarifaVehiculo (15,4000), 
                                        new TarifaVehiculo (16,5000),
                                        new TarifaVehiculo (17,6000));
    }
    
    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }

    function getNombre () {
        return $this->nombre;
    }

    function mostrarFerrys () {
        for ($i=0; $i < count ($this->ferrys) ; $i++) { 
            $this->ferrys [$i]->mostrar();
        }
    }

    function mostrarTarifas () {
        echo "Tarifas pasajeros  ";
        for ($i=0; $i < count ($this->tarifapasajeros) ; $i++) { 
            $this->tarifapasajeros[$i]->mostrar();
        }
        echo "<br><br>Tarifas camiones";
        for ($i=0; $i < count ($this->tarifavehiculos) ; $i++) { 
            $this->tarifavehiculos[$i]->mostrar();
        }
    }

    function inicializarRuta ($ruta){
        $this->rutas [$ruta->getOrigen ()] [$ruta->getDestino ()] = $ruta;
    }

    function calcularPrecio ($edad) {
        $precio = 0;
        $enc = false;
        for ($i=0; $i < count ($this->tarifapasajeros) && ($enc == false) ; $i++) { 
            if ($edad > $this->tarifapasajeros [$i]->getEdad ()){
                 $precio = $this->tarifapasajeros [$i]->getPrecio ();
            }
            else {
                $enc = true;
            }
            return $precio;
        }    
    }

    function venderBillete ($origen, $destino, $pasajero) {
        $suma = $this->rutas[$origen][$destino]->getPrecio ();
        $suma = $suma + ($this->calcularPrecio ($pasajero->getEdad ())) * ($this->rutas[$origen][$destino]->getDuracion ());
        if ($pasajero->getDiscapacidad () == true || ($pasajero->getEdad() < 18)) {
            $suma = $suma / 2;
        }
            // Falta ver si tiene coche y disminuir la capacidad del ferry
        return $suma;
    }
 
    function mostrar () {
        echo "Agencia: ".$this->getNombre ();
        echo "<br><br> FERRYS <br>";
        echo $this->mostrarFerrys ();
        echo "<br><br> TARIFAS <br>";
        echo $this->mostrarTarifas ();
    } 
    
}