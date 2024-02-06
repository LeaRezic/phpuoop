<?php

class Ucenici {
  private $ucenici;

  public function __construct() {
    $this->ucenici = array();
  }

  public function dodajUcenika($ime, $prezime, $prosjek) {
    // metoda istovremeno instancira novog učenika od proslijeđenih parametara i dodaje ga u array
    $this->ucenici[] = new Ucenik($ime, $prezime, $prosjek);
  }

  public function ispisiUcenikeIznadProsjeka($prosjek) {
    foreach ($this->ucenici as $ucenik) {
      // ispisujemo svakog učenika koji ima prosjek iznad proslijeđenog argumenta
      if ($ucenik->getProsjek() > $prosjek) {
        echo $ucenik->pripremiZaIspis() . "\n";
      }
    }
  }
}
