<?php

include("Item.php");
include("Upravitelj.php");

$upravitelj = Upravitelj::getInstance();

while(true) {
  $naziv = readline("Naziv: ");
  $cijena = readline("Cijena: ");

  $upravitelj->unesiProizvod($naziv, $cijena);

  $nastavi = readline("Želite li unijeti još jedan prozvid (d/n): ");
  while (strtolower($nastavi) != "d" && strtolower($nastavi) != "n") {
    $nastavi = readline("Želite li unijeti još jedan prozvid (d/n): ");
  }

  if (strtolower($nastavi) == 'n') {
    break;
  }

}

$upravitelj->ispisiProizvode();
