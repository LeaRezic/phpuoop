<?php

include("Proizvod.php");
include("Proizvodi.php");

// u konstruktoru se dešava sve i svašta
$proizvodi = new Proizvodi();

// ispisujemo proizvode na kraju
$proizvodi->Ispis();
