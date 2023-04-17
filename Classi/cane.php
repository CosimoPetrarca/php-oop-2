<?php
require_once 'Prodotto.php';

class Cane extends Prodotto {
    public $razza;
    public $taglia;

    public function __construct($nome, $descrizione, $prezzo, $razza, $taglia) {
        parent::__construct($nome, $descrizione, $prezzo, 'Cane');
        $this->razza = $razza;
        $this->taglia = $taglia;
    }

    public function stampaScheda() {
        echo "<div>";
        echo "<h3>" . $this->nome . "</h3>";
        echo "<p>Categoria: " . $this->categoria . "</p>";
        echo "<p>" . $this->descrizione . "</p>";
        echo "<p>Razza: " . $this->razza . "</p>";
        echo "<p>Taglia: " . $this->taglia . "</p>";
        echo "<p>Prezzo: " . $this->prezzo . " euro</p>";
        echo "</div>";
    }
}

