<?php

include("Transport.php");
include("Truck.php");
include("Ship.php");
include ("TransportFactory.php");

echo "1 - Kamion\n";
echo "2 - Brod\n";

$izbor = (int)readline("Odaberite vrstu prijevoza za dostavu (1/2): ");

while ($izbor != "1" && $izbor != "2") {
  $izbor = (int)readline("Odaberite vrstu prijevoza za dostavu (1/2): ");
}

$transport = TransportFactory::getTransportInstance($izbor);
$transport->deliver();
