<?php

class Proizvod {
  private $naziv;
  private $kolicina;
  private $cijena;

  public function __construct($naziv, $kolicina, $cijena) {
    $this->naziv = $naziv;
    $this->kolicina = $kolicina;
    $this->cijena = $cijena;
  }

  // pomoćna metoda koja da vrijednost proizvoda, mogli smo i samo imati getere pa to izračunati u Proizvodi.php
  public function getVrijednost() {
    return $this->kolicina * $this->cijena;
  }
}
