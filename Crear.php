<?php

require_once ("Agencia.php");
require_once ("Pasajero.php");
require_once ("Ferry.php");
require_once ("Ruta.php");
require_once ("TarifaPasajero.php");
require_once ("TarifaVehiculo.php");
require_once ("Pasajero.php");

$a = new Agencia ("Hermés");
 
// Creación de pasajeros
$p = new Pasajero ("Pedro", "03978415L", "09-08-1968", false);
$p1 = new Pasajero ("Juan", "0589745R", "31-05-1997", true);
$p2 = new Pasajero ("María", "18795841Y", "02-11-1958", true);

// Creación de ferrys

$f = new Ferry ("878412TE4", 250, 35);
$f1 = new Ferry ("4897452D8", 250, 30);
$f2 = new Ferry ("984A452E8", 300, 40);
$f3 = new Ferry ("8795S452V", 310, 50);

$a->ferrys = array ($f, $f1, $f2, $f3);

// Creación de rutas
$r = new Ruta ("Hierro", "Palma", $f, 20, 3);
$r1 = new Ruta ("Hierro", "Gomera", $f1, 20, 4);
$r2 = new Ruta ("Hierro", "Tenerife", $f2, 20, 3);
$r3 = new Ruta ("Hierro", "GranCanaria", $f3, 20, 1);
$r4 = new Ruta ("Hierro", "Fuerteventura", $f, 20, 2);
$r5 = new Ruta ("Hierro", "Lanzarote", $f, 20, 4);


// Adición de las rutas a Agencia

$a->inicializarRuta ($r);
$a->inicializarRuta ($r1);
$a->inicializarRuta ($r2);
$a->inicializarRuta ($r3);
$a->inicializarRuta ($r4);
$a->inicializarRuta ($r5);

echo $a->venderBillete ("Hierro", "Lanzarote", $p);



