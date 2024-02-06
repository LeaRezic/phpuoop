<?php

include("Item.php");
include("Upravitelj.php");

$upravitelj = Upravitelj::getInstance();
$counter = 1;

while(true) {
  echo "Proizvod " . $counter++ . "\n";
  $naziv = readline("Naziv: ");
  $cijena = readline("Cijena: ");

  $upravitelj->unesiProizvod($naziv, $cijena);

  echo "------\n";

  $nastavi = readline("Želite li unijeti još jedan prozvid (d/n): ");
  while (strtolower($nastavi) != "d" && strtolower($nastavi) != "n") {
    $nastavi = readline("Želite li unijeti još jedan prozvid (d/n): ");
  }

  echo "------\n";

  if (strtolower($nastavi) == 'n') {
    break;
  }

}

$upravitelj->ispisiProizvode();
