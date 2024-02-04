<?php

abstract class Proizvod {
  protected $naziv;
  protected $cijenaBezPDV;
  protected $jedinicaMjere;

  abstract function cijenaPDV($stopaPDV);

  abstract function preracunEur($tecajEur = 7.543);

  public function getNaziv() {
    return $this->naziv;
  }

  public function setNaziv($naziv) {
    return $this->naziv = $naziv;
  }

  public function getCijenaBezPDV() {
    return $this->cijenaBezPDV;
  }

  public function setCijenaBezPDV($cijenaBezPDV) {
    return $this->cijenaBezPDV = $cijenaBezPDV;
  }

  public function getJedinicaMjere() {
    return $this->jedinicaMjere;
  }

  public function setJedinicaMjere($jedinicaMjere) {
    return $this->jedinicaMjere = $jedinicaMjere;
  }
}
