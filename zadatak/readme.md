# Zadatak sa svime ikad

## Problem
Imaš trgovinu bicikala i treba ti superduper aplikacija koja može čuvati podatke o brdskim i cestovnim biciklima, učitavati ih iz txt datoteka i ispisivati u konzolu.<br/>
Glavni program će moći učitati 2 tekstualne datoteke, jednu s podatcima o cestovnim biciklima, drugu s podatcima o MTB biciklima, proizvoljan broj puta.<br/>
Učitavanje txt datoteke se odnosi na parsiranje podataka i dodavanje u listu.<br/>
Nakon završetka rada programa, ispisuju se svi bicikli.<br/>

## Kako implementirati

### Klase za podatke:
- Kreirati klasu `Bicikl` koja ima atribute `marka` i `cijena` te metodu `pripremiZaIspis` koja vraća string s oba atributa
- Kreiratu klasu `BrdskiBicikl` koja nasljeđuje klasu `Bicikl`, te ima dodatne atribute `fullSus` i `dropper`
- Kreiratu klasu `CestovniBicikl` koja nasljeđuje klasu `Bicikl`, te ima dodatni atribut `tezina`
- Klase `BrdskiBicikl` i `CestovniBicikl` trebaju nadjačati metodu `pripremiZaIspis` tako što će iskoristiti metodu roditelja te nadodati svoje atribute u string

### Pomoćne klase za parsiranje stringa u bicikl:
- Napraviti apstraktnu klasu `BiciklParser` koja definira jednu apstraktnu metodu `kreirajBiciklIzStringa($string, $delimiter)`
- Napraviti `BrdskiBiciklParser` klasu koja implementira `BiciklParser`, te vraća instancu klase `BrdskiBicikl` u metodi `kreirajBiciklIzStringa`
- Napraviti `CestovniBiciklParser` klasu koja implementira `BiciklParser`, te vraća instancu klase `CestovniBicikl` u metodi `kreirajBiciklIzStringa`
- Napraviti `BiciklParserFactory` klasu koja ima metodu `dajInstancuBiciklParsera($tipBicikla)` koja za tip bicikla vraća odgovarajuću instancu klase koja implementira `BiciklParser`
- ekstra bodovi: `BrdskiBiciklParser` i `CestovniBiciklParser` trebaju biti singletoni -> umjesto da ih se instancira s `new NekiParser`, neka imaju metode `dajInstancu()`

### Pomoćna klasa za upravljanje biciklima:
- Napraviti `BicikliManager` klasu koja ima atribut `bicikli`, te metode `ucitajTxt` i `ispisiBicikle`.
- Metoda `ucitajTxt` prima putanju do txt datoteke, te sprema učitane bicikle u svoj atribut bicikli
- Prva linija txt datoteke sadrži podatak o tipu bicikla, što treba iskoristiti prilikom odabira parsera
- Metoda `ispis` ispisuje sve bicikle, svaki u jednu liniju
- `BicikliManager` se more instancirati samo jednom (singleton)

### Txt datoteke
- prva linija sadrži podatak o tipu bicikala u datoteci, potrebno prilikom odabira parsera
- druga linija sadrži imena atributa
- ostale linije su bicikli
- zadnja linija je prazna jer mi vs code ne da spremiti datoteku bez da to doda, a ne da mi se popravljat (slobodno samo obriši, ili preskoči liniju u parseru ako je prazna)
- treba trimati stvari :)
- prve 2 linije (i bilo koju praznu) ne treba probati pretvoriti u bicikl

## Primjer rada

main.php

```php
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
```
konzola

```
Učitaj bicikle (1 - brdske, 2 - cestovne) ili prekini s radom (x): 1
Učitaj bicikle (1 - brdske, 2 - cestovne) ili prekini s radom (x): 2
Učitaj bicikle (1 - brdske, 2 - cestovne) ili prekini s radom (x): 1
Učitaj bicikle (1 - brdske, 2 - cestovne) ili prekini s radom (x): x
Brdski: Orbea, 1000eur, full sus: NE, dropper: DA
Brdski: Orbea, 3000eur, full sus: DA, dropper: DA
Brdski: Sworks, 2000eur, full sus: NE, dropper: NE
Brdski: Cannyon, 1000eur, full sus: NE, dropper: DA
Cestovni: Orbea, 1000eur, težina: 12kg
Cestovni: Orbea, 3000eur, težina: 11kg
Cestovni: Sworks, 2000eur, težina: 9kg
Cestovni: Cannyon, 1000eur, težina: 14kg
Brdski: Orbea, 1000eur, full sus: NE, dropper: DA
Brdski: Orbea, 3000eur, full sus: DA, dropper: DA
Brdski: Sworks, 2000eur, full sus: NE, dropper: NE
Brdski: Cannyon, 1000eur, full sus: NE, dropper: DA
```
