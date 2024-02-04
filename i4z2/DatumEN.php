<?php

class DatumEN extends Datum {
  private static $format = "Y-m-d";

  public function Trenutni() {
    $parentDateString = parent::Trenutni();
    $parentDate = strtotime($parentDateString);
    return date(DatumEN::$format, $parentDate);
  }
}
