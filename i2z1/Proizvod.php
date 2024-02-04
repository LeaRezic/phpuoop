<?php

class Proizvod {
  private $naziv;
  private $cijena;
  private $mjernaJedinica;

  public function __construct($naziv, $cijena, $mjernaJedinica) {
    $this->naziv = $naziv;
    $this->cijena = $cijena;
    $this->mjernaJedinica = $mjernaJedinica;
  }

  public function getNaziv() {
    return $this->naziv;
  }

  public function setNaziv($naziv) {
    $this->naziv = $naziv;
  }

  public function getCijena() {
    return $this->cijena;
  }

  public function setCijena($cijena) {
    $this->cijena = $cijena;
  }

  public function getMjernaJedinica() {
    return $this->mjernaJedinica;
  }

  public function setMjernaJedinica($mjernaJedinica) {
    $this->mjernaJedinica = $mjernaJedinica;
  }

  public function pripremiZaIspis() {
    return $this->getNaziv() . ", " . $this->getCijena() . "kn, " . $this->getMjernaJedinica();
  }
}
