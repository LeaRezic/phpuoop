<?php

class CestovniBicikl extends Bicikl {
  private $tezina;

  public function __construct($marka, $cijena, $tezina) {
    $this->marka = $marka;
    $this->cijena = $cijena;
    $this->tezina = $tezina;
  }

  public function pripremiZaIspis() {
    return "Cestovni: " . parent::pripremiZaIspis() . ", težina: " . $this->tezina . "kg";
  }

  public function getTezina() {
    return $this->tezina;
  }

  public function setTezina($tezina) {
    return $this->tezina = $tezina;
  }
}
