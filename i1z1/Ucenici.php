<?php

class Ucenici {
  private $ucenici;

  public function __construct() {
    $this->ucenici = array();
  }

  public function dodajUcenika($ime, $prezime, $prosjek) {
    $this->ucenici[] = new Ucenik($ime, $prezime, $prosjek);
  }

  public function ispisiUcenikeIznadProsjeka($prosjek) {
    foreach ($this->ucenici as $ucenik) {
      if ($ucenik->getProsjek() > $prosjek) {
        echo $ucenik->pripremiZaIspis() . "\n";
      }
    }
  }
}
