<?php

include("Datum.php");
include("DatumEN.php");

$datum = new Datum();
$datumEn = new DatumEN();

echo "datum: " . $datum->Trenutni() . "\n";
echo "datumEN: " . $datumEn->Trenutni() . "\n";
