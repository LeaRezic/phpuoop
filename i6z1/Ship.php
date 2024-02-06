<?php

class Ship extends Transport {

  // Ship mora implementirati deliver jer je to apstraktna klasa u klasi Transport
  public function deliver() {
    echo "Dostavljam brodom\n";
  }
}
