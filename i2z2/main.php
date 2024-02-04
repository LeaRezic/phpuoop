<?php

include("Polaznik.php");
include("Polaznici.php");

$polaznici = new Polaznici(__DIR__ . "/polaznici.txt");
$polaznici->IspisBivsihPolaznika();
