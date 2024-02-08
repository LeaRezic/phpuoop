<?php

class BicikliManager {

  private static $instanca;

  private $bicikli = array();

  private function __construct() {
  }

  static function dajInstancu() {
    if (!isset(BicikliManager::$instanca)) {
      BicikliManager::$instanca = new BicikliManager();
    }
    return BicikliManager::$instanca;
  }

  public function ucitajTxt($putanja) {
    $linije = file($putanja);

    $tipBicikla = $linije[0];
    $tipBicikla = trim($tipBicikla, "\n");
    $tipBicikla = trim($tipBicikla, "\r");

    $biciklParser = BiciklParserFactory::dajInstancuBiciklParsera($tipBicikla);

    foreach ($linije as $index => $linija) {
      $linija = trim($linija, "\n");
      $linija = trim($linija, "\r");

      if ($index < 2 || empty($linija)) {
        continue;
      }
      $this->bicikli[] = $biciklParser->kreirajBiciklIzStringa($linija, ';');
    }
  }

  public function ispisiBicikle() {
    foreach ($this->bicikli as $bicikl) {
      echo $bicikl->pripremiZaIspis() . "\n";
    }
  }
}
