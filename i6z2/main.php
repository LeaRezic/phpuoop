<?php

include("Item.php");
include("Upravitelj.php");

// getInstance je statička metoda na klasi Upravitelj, da je pozovemo još 100 puta dok se program izvršava, uvijek bismo dobivali isti objekt
$upravitelj = Upravitelj::getInstance();
$counter = 1;

// tu u mainu unosimo proizvode, ali mogli smo to raditi i u upravitelju da smo htjeli
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
