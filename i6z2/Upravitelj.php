<?php

class Upravitelj
{
  private static $instance;
  private $proizvodi = [];

  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new self;
    }
    return self::$instance;
  }

  public function unesiProizvod($naziv, $cijena) {
    $this->proizvodi[] = new Item($naziv, $cijena);
    // array_push($this->proizvodi, new Item($naziv, $cijena));
  }

  public function ispisiProizvode() {
    foreach ($this->proizvodi as $proizvod) {
      echo $proizvod->getNaziv() . " " . $proizvod->getCijena() . "\n";
    }
  }

  // public static function test() {
  //   if (!isset(Upravitelj::$instance)) {
  //     Upravitelj::$instance = new Upravitelj;
  //   }
  //   return Upravitelj::$instance;
  // }

}

Upravitelj::getInstance();
