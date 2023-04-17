<?php
require_once __DIR__.'/Classi/cane.php';
require_once __DIR__.'/Classi/gatto.php';


$cane1 = new Cane("Crocchette per cane", "Confezione da 10kg", 25.99, "Pastore Tedesco", "Grande");
$cane2 = new Cane("Collare maglie resistenti", "Bagnato d'oro e diamanti 20 carati", 500, "Chiwawa", "Piccola");
$cane3 = new Cane("Osso di gomma", "Migliora la salute dei denti del tuo cane", 18, "Tutte", "Tutte");
$gatto1 = new Gatto("Crocchette per gatto castrato", "Confezione da 3kg", 11.99, "Tutte", "Adulto");
$gatto2 = new Gatto("Giochino per gatto", "Pallina con campanellino", 5.99, "Persiano", "Adulto");
$gatto3 = new Gatto("Antiparassitario", "Elimina zecche e pulci", 12, "Tutte", "Adulto");



$cane1->stampaScheda();
$cane2->stampaScheda();
$cane3->stampaScheda();
$gatto1->stampaScheda();
$gatto2->stampaScheda();
$gatto3->stampaScheda();
