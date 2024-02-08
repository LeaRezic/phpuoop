<?php

include("Bicikl.php");
include("BrdskiBicikl.php");
include("CestovniBicikl.php");

include("BiciklParser.php");
include("BrdskiBiciklParser.php");
include("CestovniBiciklParser.php");
include("BiciklParserFactory.php");

include("BicikliManager.php");

while (true) {
  $izbor = strtolower(readline("Učitaj bicikle (1 - brdske, 2 - cestovne) ili prekini s radom (x): "));
  while ($izbor != "x" && $izbor != "1" && $izbor != "2") {
    $izbor = strtolower(readline("Učitaj bicikle (1 - brdske, 2 - cestovne) ili prekini s radom (x): "));
  }

  if ($izbor == "1") {
    BicikliManager::dajInstancu()->ucitajTxt(__DIR__ . "/brdski.txt");
  } else if ($izbor == "2") {
    BicikliManager::dajInstancu()->ucitajTxt(__DIR__ . "/cestovni.txt");
  } else if ($izbor == "x") {
    break;
  }
}

BicikliManager::dajInstancu()->ispisiBicikle();
