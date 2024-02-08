<?php

class Bicikl {
  protected $marka;
  protected $cijena;

  protected function pripremiZaIspis() {
    return $this->marka . ", " . $this->cijena . "eur";
  }

  public function getMarka() {
    return $this->marka;
  }

  protected function setMarka($marka) {
    return $this->marka = $marka;
  }

  public function getCijena() {
    return $this->cijena;
  }

  protected function setCijena($cijena) {
    return $this->cijena = $cijena;
  }
}
