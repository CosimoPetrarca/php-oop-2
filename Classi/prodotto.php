<?php

class Prodotto {
    public $nome;
    public $descrizione;
    public $prezzo;
    public $categoria;

    public function __construct($nome, $descrizione, $prezzo, $categoria) {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
    }

    public function stampaScheda() {
        echo "<div>";
        echo "<h3>" . $this->nome . "</h3>";
        echo "<p>" . $this->descrizione . "</p>";
        echo "<p>Categoria: " . $this->categoria . "</p>";
        echo "<p>Prezzo: " . $this->prezzo . " euro</p>";
        echo "</div>";
    }
}

