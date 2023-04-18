<?php

class PrezzoNonValido extends Exception {
    public function __construct($prezzo) {
        parent::__construct("Il prezzo {$prezzo} non è valido", 0, null);
    }
}
