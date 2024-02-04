<?php

class TransportFactory {
  private function __construct() {
  }

  public static function getTransportInstance($type) {
    if ($type == "1") {
      return new Truck();
    } else if ($type == "2") {
      return new Ship();
    } else {
      echo "Neispravan tip dostave\n";
    }
  }
}
