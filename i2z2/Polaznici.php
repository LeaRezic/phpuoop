<?php

class Polaznici {
  private $txtPath;
  private $polaznici;

  // u konstruktor smo proslijedili putanju, učitat će se taj file
  public function __construct($txtPath) {
    $this->polaznici = array();
    $this->txtPath = $txtPath;
    $this->UcitajTxt();
  }

  private function UcitajTxt() {
    // file je PHP-ova funckcija koja učita datoteku u array stringova
    $linije = file($this->txtPath);

    // iteriramo po svakoj liniji, treba nam broj linije da preskočimo header, takva je sintaksa "$mojArray as $indexItema => $item"
    foreach($linije as $brLinije => $linija) {
      // ovdje trimamo različite znakove za newline
      $linija = trim($linija, "\n");
      $linija = trim($linija, "\r");

      // cjepkamo pojedinu liniju na komade, razlomljeno preko ";"
      $detalji = explode(";", $linija);

      // preskačemo prvu liniju ili liniju koja nema točno 3 dijela (da nam ne pukne)
      if ($brLinije == 0 || count($detalji) != 3) {
        continue; // nastavljamo na idući element bez da obradimo takvu liniju
      } else {
        // kreiramo novog polaznika od detalja linije
        $this->polaznici[] = new Polaznik($detalji[0], $detalji[1], $detalji[2] == "DA");
      }
    }
  }

  public function IspisBivsihPolaznika() {
    echo "--- Ispis polaznika koji su završili tečaj ---\n";
    foreach ($this->polaznici as $polaznik) {
      // ispisujemo svakog polaznika koji ima završio true
      if ($polaznik->getZavrsio()) {
        echo $polaznik->getIme() . " " . $polaznik->getPrezime() . "\n";
      }
    }
  }
}
