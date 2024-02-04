<?php

class Proizvodi {
  private $proizvodi;

  public function __construct() {
    $this->proizvodi = array();
    $this->Unos();
  }

  private function Unos() {
    $counter = 1;

    while (true) {
      echo "--- Proizvod " . $counter . " ---\n";
      $naziv = readline("Naziv: ");
      $cijena = (double)readline("Cijena: ");
      $mjernaJedinica = readline("Mjerna jedinica: ");

      $this->proizvodi[] = new Proizvod($naziv, $cijena, $mjernaJedinica);

      echo "------\n";
      $nastavi = readline("Želite li unijeti još jedan prozvid (d/n): ");
      while (strtolower($nastavi) != "d" && strtolower($nastavi) != "n") {
        $nastavi = readline("Želite li unijeti još jedan prozvid (d/n): ");
      }

      if (strtolower($nastavi) == 'n') {
        break;
      }

      $counter += 1;
    }

    $this->Ispis();
  }

  public function Ispis() {
    echo "--- Ispis proizvoda ---\n";
    foreach ($this->proizvodi as $key=>$proizvod) {
      echo $key + 1 . ". " . $proizvod->pripremiZaIspis() . "\n";
    }
  }
}
