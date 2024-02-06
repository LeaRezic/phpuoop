<?php

class Proizvodi {
  private $proizvodi;

  public function __construct() {
    $this->proizvodi = array();
    // automatski se pokreće unos
    $this->Unos();
  }

  private function Unos() {
    while (true) {

      $naziv = readline("Naziv: ");
      $kolicina = (int)readline("Kolicina: ");
      $cijena = (double)readline("Cijena: ");

      // istovremeno instanciranje novog proizvoda i dodavanje u array
      $this->proizvodi[] = new Proizvod($naziv, $kolicina, $cijena);

      echo "------\n"; // viška da ljepše izgleda

      // nastavljamo učitavati readline sve dok nam korisnik ne unese d/D/n/N
      $nastavi = readline("Želite li unijeti još jedan prozvid (d/n): ");
      // strtolower je PHP-ova funkcija koja casta string to lower
      while (strtolower($nastavi) != "d" && strtolower($nastavi) != "n") {
        $nastavi = readline("Želite li unijeti još jedan prozvid (d/n): ");
      }

      if (strtolower($nastavi) == 'n') {
        break;
      }
    }
  }

  public function Ispis() {
    // inicijaliziramo sumu s 0
    $sum = 0;

    // za svaki proizvod ukupnu sumu svih proizvoda povećavamo za vrijednost trenutnog prozivoda
    // mogli smo napisati i malo dulje:
    // $sum = $sum + $proizvod->getCijena() * $proizvod->getKolicina()
    foreach ($this->proizvodi as $proizvod) {
      $sum += $proizvod->getVrijednost();
    }

    echo "------\n";
    echo "Ukupna vrijednost proizvoda je " . $sum . " kn\n";
  }
}
