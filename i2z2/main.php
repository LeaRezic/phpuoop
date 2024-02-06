<?php

include("Polaznik.php");
include("Polaznici.php");

// polaznike instanciramo s putanjom do txt datoteke, ovo __DIR__ je magična konstanta PHP-a https://www.php.net/manual/en/language.constants.magic.php
// u konstruktoru će se to učitat
$polaznici = new Polaznici(__DIR__ . "/polaznici.txt");

// ispisujemo polaznike koji su završili tečaj
// mogli smo i u mainu dohvatiti sve polaznike pa ispisati one koji su završili
$polaznici->IspisBivsihPolaznika();
