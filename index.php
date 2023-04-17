<?php
require_once __DIR__.'/Classi/cane.php';


$cane1 = new Cane("Crocchette per cane", "Confezione da 10kg", 25.99, "Pastore Tedesco", "Grande");
$cane2 = new Cane("Collare maglie resistenti", "Bagnato d'oro e diamanti 20 carati", 500, "Chiwawa", "Piccola");
$cane3 = new Cane("Osso di gomma", "Migliora la salute dei denti del tuo cane", 18, "Tutte", "Tutte");


$cane1->stampaScheda();
$cane2->stampaScheda();
$cane3->stampaScheda();
