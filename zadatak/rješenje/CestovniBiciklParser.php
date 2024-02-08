<?php

class CestovniBiciklParser extends BiciklParser {

  private static $instanca;

  private function __construct() {
  }

  static function dajInstancuParsera() {
    if (!isset(CestovniBiciklParser::$instanca)) {
      CestovniBiciklParser::$instanca = new CestovniBiciklParser();
    }
    return CestovniBiciklParser::$instanca;
  }

  public function kreirajBiciklIzStringa($string, $delimiter) {
    $parts = explode($delimiter, $string);
    return new CestovniBicikl($parts[0], $parts[1], $parts[2]);
  }
}
