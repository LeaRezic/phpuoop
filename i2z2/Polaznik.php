<?php

class Polaznik {
  private $ime;
  private $prezime;
  private $zavrsio;

  public function __construct($ime, $prezime, $zavrsio) {
    $this->ime = $ime;
    $this->prezime = $prezime;
    $this->zavrsio = $zavrsio;
  }

  public function getIme() {
    return $this->ime;
  }

  public function setIme($ime) {
    return $this->ime = $ime;
  }

  public function getPrezime() {
    return $this->prezime;
  }

  public function setPrezime($prezime) {
    return $this->prezime = $prezime;
  }

  public function getZavrsio() {
    return $this->zavrsio;
  }

  public function setZavrsio($zavrsio) {
    return $this->zavrsio = $zavrsio;
  }
}
