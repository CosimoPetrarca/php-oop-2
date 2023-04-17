<?php
require_once 'Prodotto.php';

class Pesci extends Prodotto {
    public $specie;
    public $acquario;

    public function __construct($nome, $descrizione, $prezzo, $specie, $acquario) {
        parent::__construct($nome, $descrizione, $prezzo, 'Pesci');
        $this->specie = $specie;
        $this->acquario = $acquario;
    }

    public function stampaScheda() {
        echo "<div>";
        echo "<h3>" . $this->nome . "</h3>";
        echo "<p>Categoria: " . $this->categoria . "</p>";
        echo "<p>" . $this->descrizione . "</p>";
        echo "<p>Specie: " . $this->specie . "</p>";
        echo "<p>Dim. Acquario: " . $this->acquario . "</p>";
        echo "<p>Prezzo: " . $this->prezzo . " euro</p>";
        echo "</div>";
    }
}
