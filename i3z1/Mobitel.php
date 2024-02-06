<?php

// Mobitel nasljeđuje Smartphone, pa ima sve od Smartphonea, i svoje stvari
class Mobitel extends Smartphone {
  public function __construct($marka, $model, $baterija) {
    $this->marka = $marka;
    $this->model = $model;
    $this->baterija = $baterija;
  }
  public function vrijemePunjenja($punjac) {
    // pisalo je da se baterija sprema u mili amper satima, stoga dijeljenje s 1000, da podijelimo amper sate s amperima i dobijemo sate
    return $this->getBaterija() / 1000 / $punjac;
  }
}
