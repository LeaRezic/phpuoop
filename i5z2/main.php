<?php

include ("PametniMobitel.php");

$marka = readline("Unesite marku: ");
$model = readline("Unesite model: ");
$memorija = (int)readline("Unesite količinu memorije u gb: ");

$tipMreze = (int)readline("Koristi li 4G ili 5G mrežu (4/5): ");

while ($tipMreze != "4" && $tipMreze != "5") {
  $tipMreze = (int)readline("Koristi li 4G ili 5G mrežu (4/5): ");
}

$mobitel = new PametniMobitel($marka, $model, $memorija, $tipMreze == "5");
echo $mobitel->pripremiZaIspis();
