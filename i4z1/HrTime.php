<?php

class HrTime extends Time {

  // ovo je override parent metode show
  public function show() {
    // date prima string formata, a pojedina slova su specifična PHP sintaksa za format datuma i vremena, tablica na linku: https://www.php.net/manual/en/datetime.format
    return date("H:i:s");
  }

  // pozovemo svoju metodu show, to razlomimo u array preko simobla ":" i onda odmah to pretvorimo u onaj array koji dopušta da se itemi dohvaćaju preko indeksa (može drugačije)
  // poanta je samo da moramo pokazati prvo prvi item, pa onda drugi item nakon što razlomimo
  public function Split() {
    $parts = explode(":", $this->show());
    echo "H=" . $parts[0] . ", M=" . $parts[1] . "\n";
  }
}
