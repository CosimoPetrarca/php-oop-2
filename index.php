<?php
require_once __DIR__.'/Classi/cane.php';
require_once __DIR__.'/Classi/gatto.php';
require_once __DIR__.'/Classi/uccello.php';
require_once __DIR__.'/Classi/pesce.php';


$cane1 = new Cane("Crocchette per cane", "Confezione da 10kg", 25.99, "Pastore Tedesco", "Grande");
$cane2 = new Cane("Collare maglie resistenti", "Bagnato d'oro e diamanti 20 carati", 500, "Chiwawa", "Piccola");
$cane3 = new Cane("Osso di gomma", "Migliora la salute dei denti del tuo cane", 18, "Tutte", "Tutte");
$gatto1 = new Gatto("Crocchette per gatto castrato", "Confezione da 3kg", 11.99, "Tutte", "Adulto");
$gatto2 = new Gatto("Giochino per gatto", "Pallina con campanellino", 5.99, "Persiano", "Adulto");
$gatto3 = new Gatto("Antiparassitario", "Elimina zecche e pulci", 12, "Tutte", "Adulto");
$uccello1 = new Uccelli("Mix di semi per uccelli", "Confezione da 1kg", 7.99, "Canarino", "Semi vari");
$uccello2 = new Uccelli("Semi di girasole", "Confezione da 1kg", 9.99, "Pappagallo", "Semi di girasole");
$pesce1 = new Pesci("Acquario per Discus", "Capacità 30 litri", 55.99, "Discus", "Medio");
$pesce2 = new Pesci("Acquario per Piragna", "Capacità 60 litri", 120, "Piragna", "Grande");


?>

<!DOCTYPE html>
<html>

<head>
    <title>Il mio negozio di animali</title>
    <!-- Link ai file CSS di Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Link ai file JS di Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="d-flex flex-wrap ">
        <?php $cane1->stampaScheda(); ?>
        <?php $cane2->stampaScheda(); ?>
        <?php $cane3->stampaScheda(); ?>
        <?php $gatto1->stampaScheda(); ?>
        <?php $gatto2->stampaScheda(); ?>
        <?php $gatto3->stampaScheda(); ?>
        <?php $uccello1->stampaScheda(); ?>
        <?php $uccello2->stampaScheda(); ?>
        <?php $pesce1->stampaScheda(); ?>
        <?php $pesce2->stampaScheda(); ?>
    </div>
</body>

</html>