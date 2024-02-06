# Osnovni pojmovi OOP-a:
- Enkapsulacija
- Apstrakcija
- Nasljeđivanje
- Polimorfizam
- [za šestogodišnjake](https://www.freecodecamp.org/news/object-oriented-programming-concepts-21bb035f7260/)

# Klase i co (treba znati što je što i znati definirati u PHP-u):
- Što je klasa općenito, što je instanca klase, atributi i metode klase
- Kontrola pristupa atributima/metodama: private, protected, public
- Konstruktor (metoda za kreiranje instance klase, ima default prazni, možemo svoj napisati, u slučaju nasljeđivanja možemo u dijete klasi zvati roditelj konstruktor)
- Geteri i seteri (realno, to su metode za get/set atributa)
- Klasa koja nasljeđuje neku klasu (extends)
- Nadjačavanje (override) metode roditelj klase u dijete klasi
- Apstraktna klasa i apstraktne metode
- Statički atributi i metode na nekoj klasi
- Dohvaćanje statičkih atributa i metoda klase u programu, bez instance klase (s onim čudnim duplim dvotočkama ::)

# UML
Treba znat osnove, dijelovi kućice:
1. dio je ime klase (italic je apstraktna klasa, underline je static)<br/>
2. dio su atributi<br/>
3. dio su metode<br/>

Prava pristupa:<br/>
- \+ public<br/>
- \- private<br/>
- \# protected<br/>

Neka strjelica za nasljeđivanje (moguće kriva).

# Patterni:
- [Singleton](https://refactoring.guru/design-patterns/singleton) (samo jedna instanca neke klase kroz cijeli program -> lako se implementira sa statičkim atributom i metodom)
- [Factory](https://refactoring.guru/design-patterns/factory-method) (dohvaćanje instance neke klase, bez eksplicitnog instanciranja ikakve klase -> tj instanciranje se događa u nekoj pomoćnoj funkciji, a ne u samom dijelu koda gdje se ta instanca koristi)
