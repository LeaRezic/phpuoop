<?php

class BiciklParserFactory {
  private function __construct() {
  }

  public static function dajInstancuBiciklParsera($type) {
    if ($type == "BRDSKI") {
      return BrdskiBiciklParser::dajInstancuParsera();
    } else if ($type == "CESTOVNI") {
      return CestovniBiciklParser::dajInstancuParsera();
    } else {
      echo "Neispravan tip bicikla\n";
    }
  }
}
