<?php

class BrdskiBiciklParser extends BiciklParser {
  private static $instanca;

  private function __construct() {
  }

  static function dajInstancuParsera() {
    if (!isset(BrdskiBiciklParser::$instanca)) {
      BrdskiBiciklParser::$instanca = new BrdskiBiciklParser();
    }
    return BrdskiBiciklParser::$instanca;
  }

  public function kreirajBiciklIzStringa($string, $delimiter) {
    $parts = explode($delimiter, $string);
    return new BrdskiBicikl($parts[0], $parts[1], $parts[2] == "DA", $parts[3] == "DA");
  }
}
