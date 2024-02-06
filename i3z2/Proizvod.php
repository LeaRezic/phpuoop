<?php

// ovo je samo jedna apstrakta klasa, koja ne radi ništa :D
abstract class Proizvod {
  protected $naziv;
  protected $cijenaBezPDV;
  protected $jedinicaMjere;

  // apstraktna metoda koju bi djeca morala implementirati, mi samo određujemo potpis (koje argumente prima)
  // možda i ne trebamo proslijediti stopuPDV-a kao argument, nego bi svaki neapstraktni proizvod imao svoj property stopaPDV, hmmm
  abstract function cijenaPDV($stopaPDV);

  // apstraktna metoda koju bi djeca morala implementirati, mi samo određujemo potpis (koje argumente prima, u ovom slučaju tečaj -> ali i to bi moglo ne biti argument)
  abstract function preracunEur($tecajEur);

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
