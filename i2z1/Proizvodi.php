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

      // istovremeno inicijaliziranje i dodavanje u array
      $this->proizvodi[] = new Proizvod($naziv, $cijena, $mjernaJedinica);

      echo "------\n";

      // tražimo unos sve dok nije točno d/D/n/N
      $nastavi = readline("Želite li unijeti još jedan prozvid (d/n): ");
      while (strtolower($nastavi) != "d" && strtolower($nastavi) != "n") {
        $nastavi = readline("Želite li unijeti još jedan prozvid (d/n): ");
      }

      // ako je n/N, prekidamo
      if (strtolower($nastavi) == 'n') {
        break;
      }

      $counter += 1;
    }

    $this->Ispis();
  }

  public function Ispis() {
    echo "--- Ispis proizvoda ---\n";
    // ispis proizvoda, iskoristili smo sitnaksu "$this->proizvodi as $indeksProizvoda => $proizvod" umjesto samo  "$this->proizvodi as $proizvod"
    // da možemo numerirano pokazati proizvode (ne treba, samo je bilo u nekom drugom zadatku pa me povuklo), kreće od nule pa je +1
    foreach ($this->proizvodi as $indeksProizvoda => $proizvod) {
      echo $indeksProizvoda + 1 . ". " . $proizvod->pripremiZaIspis() . "\n";
    }
  }
}
