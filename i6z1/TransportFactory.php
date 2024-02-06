<?php

class TransportFactory {

  // ovo nije potrebno, samo smo sakrili konstruktor tako što je private
  private function __construct() {
  }

  // napravili smo statičku metoda koja će vratiti instancu biločega što implementira klasu Transport, dakle ima deliver metodu
  // sve bi se to ljepše i očitije vidjelo da koristimo typed jezik ali jebiga
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
