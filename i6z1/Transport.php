<?php

// Transport je apstraktna klasa s jednom apstraktnom metodom, svi implementatori će morati to implementirati
// ljepše bi ovo bilo preko sučelja, ali nećemo pretjerivati :)
abstract class Transport {
  abstract public function deliver();
}
