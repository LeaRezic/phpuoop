<?php

class Item {

  private $naziv;
  private $cijena;

  public function __construct($naziv, $cijena) {
    $this->naziv = $naziv;
    $this->cijena = $cijena;
  }

  public function getNaziv() {
    return $this->naziv;
  }

  public function setNaziv($naziv) {
    return $this->naziv = $naziv;
  }

  public function getCijena() {
    return $this->cijena;
  }

  public function setCijena($cijena) {
    return $this->cijena = $cijena;
  }
}
