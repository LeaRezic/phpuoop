<?php

class Ucenik {
  private $ime;
  private $prezime;
  private $prosjek;

  public function __construct($ime, $prezime, $prosjek) {
    $this->ime = $ime;
    $this->prezime = $prezime;
    $this->prosjek = $prosjek;
  }

  public function getProsjek() {
    return $this->prosjek;
  }

  // da se lakše ispiše, ali skroz bi ok bilo imati getere, pa složiti ovaj string gdje nam treba
  public function pripremiZaIspis() {
    return $this->ime . " " . $this->prezime;
  }
}
