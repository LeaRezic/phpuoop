<?php

include("Transport.php");
include("Truck.php");
include("Ship.php");
include ("TransportFactory.php");

echo "1 - Kamion\n";
echo "2 - Brod\n";

$izbor = (int)readline("Odaberite vrstu prijevoza za dostavu (1/2): ");

// propmt sve dok ne dobijemo 1 ili 2
while ($izbor != "1" && $izbor != "2") {
  $izbor = (int)readline("Odaberite vrstu prijevoza za dostavu (1/2): ");
}

// ovisno o tome je li 1 ili 2, zatražimo tvornicu da nam da instancu bilo čega što će imati metodu deliver()
// konkretnije, mi želimo instancu bilo koje klase koja je implementirala apstraktnu klasu Transport, jer znamo da će imati deliver, a nije nas briga kakav deliver
$transport = TransportFactory::getTransportInstance($izbor);
$transport->deliver();
