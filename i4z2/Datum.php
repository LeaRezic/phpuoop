<?php

class Datum {
  private static $format = "d.m.Y";

  public function Trenutni() {
    return date(Datum::$format);
  }
}
