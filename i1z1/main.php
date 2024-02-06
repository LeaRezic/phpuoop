<?php

include("Ucenik.php");
include("Manager.php");

// instanciranje managera
$ucenici = new Ucenici();

// dodavanje/instanciranje učenika
$ucenici->dodajUcenika("Ivić", "Ivo", 4.75);
$ucenici->dodajUcenika("Anić", "Ana", 3.91);
$ucenici->dodajUcenika("Perić", "Pero", 4.97);
$ucenici->dodajUcenika("Marić", "Marko", 4.49);
$ucenici->dodajUcenika("Jurić", "Jure", 2.87);

// ispis učenika s prosjekom iznad 4.5
// istu metodu bismo mogli iskoristiti za drugačiji ispis
// a mogli smo i hardcodirati 4.5 u impementaciju metode, pa pozvati ovdje bez argumenta
$ucenici->ispisiUcenikeIznadProsjeka(4.5);
