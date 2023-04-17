<?php
require_once 'Prodotto.php';

class Uccelli extends Prodotto {
    public $specie;
    public $cibo;

    public function __construct($nome, $descrizione, $prezzo, $specie, $cibo) {
        parent::__construct($nome, $descrizione, $prezzo, 'Uccelli');
        $this->specie = $specie;
        $this->cibo = $cibo;
    }

    public function stampaScheda() {
        echo "<div>";
        echo "<h3>" . $this->nome . "</h3>";
        echo "<p>Categoria: " . $this->categoria . "</p>";
        echo "<p>" . $this->descrizione . "</p>";
        echo "<p>Specie: " . $this->specie . "</p>";
        echo "<p>Cibo: " . $this->cibo . "</p>";
        echo "<p>Prezzo: " . $this->prezzo . " euro</p>";
        echo "</div>";
    }
}
