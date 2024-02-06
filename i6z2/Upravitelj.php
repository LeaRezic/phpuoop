<?php

class Upravitelj
{
  private static $instance;
  private $proizvodi = [];

  public static function getInstance() {
    if (!isset(Upravitelj::$instance)) {
      Upravitelj::$instance = new Upravitelj;
    }
    return Upravitelj::$instance;
  }

  public function unesiProizvod($naziv, $cijena) {
    $this->proizvodi[] = new Item($naziv, $cijena);
  }

  public function ispisiProizvode() {
    foreach ($this->proizvodi as $proizvod) {
      echo $proizvod->getNaziv() . " " . $proizvod->getCijena() . "\n";
    }
  }
}

Upravitelj::getInstance();
