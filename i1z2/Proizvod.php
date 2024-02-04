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

  public function getVrijednost() {
    return $this->kolicina * $this->cijena;
  }
}
