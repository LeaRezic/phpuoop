<?php

class BrdskiBicikl extends Bicikl {
  private $fullSus;
  private $dropper;

  public function __construct($marka, $cijena, $fullSus, $dropper) {
    $this->marka = $marka;
    $this->cijena = $cijena;
    $this->fullSus = $fullSus;
    $this->dropper = $dropper;
  }

  public function pripremiZaIspis() {
    return "Brdski: " . parent::pripremiZaIspis() . ", full sus: " . ($this->fullSus ? 'DA' : 'NE') . ", dropper: " . ($this->dropper ? 'DA' : 'NE');
  }

  public function getFullSus() {
    return $this->fullSus;
  }

  public function setFullSus($fullSus) {
    return $this->fullSus = $fullSus;
  }

  public function getDropper() {
    return $this->dropper;
  }

  public function setDropper($dropper) {
    return $this->dropper = $dropper;
  }
}
