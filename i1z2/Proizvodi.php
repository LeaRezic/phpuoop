<?php

class Proizvodi {
  private $proizvodi;

  public function __construct() {
    $this->proizvodi = array();
    $this->Unos();
  }

  private function Unos() {
    while (true) {

      $naziv = readline("Naziv: ");
      $kolicina = (int)readline("Kolicina: ");
      $cijena = (double)readline("Cijena: ");

      $this->proizvodi[] = new Proizvod($naziv, $kolicina, $cijena);

      echo "------\n";
      $nastavi = readline("Želite li unijeti još jedan prozvid (d/n): ");
      while (strtolower($nastavi) != "d" && strtolower($nastavi) != "n") {
        $nastavi = readline("Želite li unijeti još jedan prozvid (d/n): ");
      }

      if (strtolower($nastavi) == 'n') {
        break;
      }
    }
  }

  public function Ispis() {
    $sum = 0;

    foreach ($this->proizvodi as $proizvod) {
      $sum += $proizvod->getVrijednost();
    }

    echo "------\n";
    echo "Ukupna vrijednost proizvoda je " . $sum . " kn\n";
  }
}
