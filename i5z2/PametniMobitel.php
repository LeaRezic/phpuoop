<?php

class PametniMobitel {
  protected $marka;
  protected $model;
  protected $memorija;
  protected $podrzava5g;

  public function __construct($marka, $model, $memorija, $podrzava5g) {
    $this->marka = $marka;
    $this->model = $model;
    $this->memorija = $memorija;
    $this->podrzava5g = $podrzava5g;
  }

  public function getMarka() {
    return $this->marka;
  }

  public function setMarka($marka) {
    return $this->marka = $marka;
  }

  public function getModel() {
    return $this->model;
  }

  public function setModel($model) {
    return $this->model = $model;
  }

  public function getMemorija() {
    return $this->memorija;
  }

  public function setMemorija($memorija) {
    return $this->memorija = $memorija;
  }

  public function getPodrzava5g() {
    return $this->podrzava5g;
  }

  public function setPodrzava5g($podrzava5g) {
    return $this->podrzava5g = $podrzava5g;
  }

  public function pripremiZaIspis() {
    return $this->getMarka() . " " . $this->getModel() . ", " . $this->getMemorija() . "GB, " . ($this->getPodrzava5g() ? "5G" : "4G") . "\n";
  }
}
