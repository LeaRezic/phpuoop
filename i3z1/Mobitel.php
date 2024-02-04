<?php

class Mobitel extends Smartphone {
  public function __construct($marka, $model, $baterija) {
    $this->marka = $marka;
    $this->model = $model;
    $this->baterija = $baterija;
  }
  public function vrijemePunjenja($punjac) {
    return $this->getBaterija() / 1000 / $punjac;
  }
}
