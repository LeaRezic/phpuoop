<?php

class Polaznici {
  private $txtPath;
  private $polaznici;

  public function __construct($txtPath) {
    $this->polaznici = array();
    $this->txtPath = $txtPath;
    $this->UcitajTxt();
  }

  private function UcitajTxt() {
    $linije = file($this->txtPath);

    foreach($linije as $brLinije => $linija) {
      $linija = trim($linija, "\n");
      $linija = trim($linija, "\r");

      $detalji = explode(";", $linija);

      if ($brLinije == 0 || count($detalji) != 3) {
        continue;
      } else {
        $this->polaznici[] = new Polaznik($detalji[0], $detalji[1], $detalji[2] == "DA");
      }
    }
  }

  public function IspisBivsihPolaznika() {
    echo "--- Ispis polaznika koji su završili tečaj ---\n";
    foreach ($this->polaznici as $polaznik) {
      if ($polaznik->getZavrsio()) {
        echo $polaznik->getIme() . " " . $polaznik->getPrezime() . "\n";
      }
    }
  }
}
