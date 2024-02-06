<?php

include("Smartphone.php");
include("Mobitel.php");

$marka = readline("Unesite marku mobitela: ");
$model = readline("Unesite model mobitela: ");
$baterija = (double)readline("Unesite kapacitet baterije u mAh: ");

$mobitel = new Mobitel($marka, $model, $baterija);

$punjac = (double)readline("Unesite jačinu punjača u A: ");

echo "------\n";
// round je PHP-ova matematčika funkcija, ovdje čisto da je ispis ljepši, ali sumnjam da treba
echo "Potrebno vrijeme punjenja: " . round($mobitel->vrijemePunjenja($punjac), 2) . "h\n";
