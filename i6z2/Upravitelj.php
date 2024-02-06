<?php

class Upravitelj
{
  private static $instance;
  private $proizvodi = [];

  // Upravitelj klasa ima statički property $instance, i statičku metodu getInstance()
  // kadgod pozovemo getInstance, provjerimo je li $instance već jednom instanciran, ako nije - instanciramo ga
  // i onda vraćamo instancu, neovisno o tome je li upravo instancirana, ili nekad prije
  public static function getInstance() {
    if (!isset(Upravitelj::$instance)) { // isset je PHP-ov helper
      Upravitelj::$instance = new Upravitelj;
    }
    return Upravitelj::$instance;
  }

  public function unesiProizvod($naziv, $cijena) {
    // istovremeno instanciramo i dodajemo u array
    $this->proizvodi[] = new Item($naziv, $cijena);
  }

  public function ispisiProizvode() {
    foreach ($this->proizvodi as $proizvod) {
      echo $proizvod->getNaziv() . " " . $proizvod->getCijena() . "\n";
    }
  }
}
