<?php

class Truck extends Transport {
  // Truck mora implementirati deliver jer je to apstraktna klasa u klasi Transport
  public function deliver() {
    echo "Dostavljam kamionom \n";
  }
}
