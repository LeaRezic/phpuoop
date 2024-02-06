<?php

include("Datum.php");
include("DatumEN.php");

$datum = new Datum();
$datumEn = new DatumEN();

// nije pisalo da nam treba išta u mainu, ali testa radi
echo "datum: " . $datum->Trenutni() . "\n";
echo "datumEN: " . $datumEn->Trenutni() . "\n";
