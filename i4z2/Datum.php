<?php

class Datum {
  // PHP sintaksa za format datuma i vremena, tablica na linku: https://www.php.net/manual/en/datetime.format
  // spremamo format kao statički property, ali nije da bismo morali, mogli bismo samo izravno koristiti string u metodi Trenutni()
  private static $format = "d.m.Y";

  public function Trenutni() {
    return date(Datum::$format);
  }
}
