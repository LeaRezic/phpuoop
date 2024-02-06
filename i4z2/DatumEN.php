<?php

class DatumEN extends Datum {
  // PHP sintaksa za format datuma i vremena, tablica na linku: https://www.php.net/manual/en/datetime.format
  // spremamo format kao statički property, ali nije da bismo morali, mogli bismo samo izravno koristiti string u metodi Trenutni()
  private static $format = "Y-m-d";

  public function Trenutni() {
    // zadatak je tražio da uzmemo od nadklase Trenutni(), pa smo to i napravili, pa pretvorili taj string u unix timestamp, i onda taj timestamp formatirali u drugačiji string
    $parentDateString = parent::Trenutni();
    $parentDate = strtotime($parentDateString);
    return date(DatumEN::$format, $parentDate);
  }
}
