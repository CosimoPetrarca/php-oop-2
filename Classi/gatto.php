<?php
require_once 'Prodotto.php';

class Gatto extends Prodotto {
    public $razza;
    public $eta;

    public function __construct($nome, $descrizione, $prezzo, $razza, $eta) {
        parent::__construct($nome, $descrizione, $prezzo, 'Gatto');
        $this->razza = $razza;
        $this->eta = $eta;
    }

    public function stampaScheda() {
        echo "<div>";
        echo "<h3>" . $this->nome . "</h3>";
        echo "<p>" . $this->descrizione . "</p>";
        echo "<p>Categoria: " . $this->categoria . "</p>";
        echo "<p>Razza: " . $this->razza . "</p>";
        echo "<p>Età: " . $this->eta . "</p>";
        echo "<p>Prezzo: " . $this->prezzo . " euro</p>";
        echo "</div>";
    }
}
