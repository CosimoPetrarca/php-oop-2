<?php
require_once 'Prodotto.php';

class Uccelli extends Prodotto {
    use Sconto;
    
    public $specie;
    public $cibo;

    public function __construct($nome, $descrizione, $prezzo, $specie, $cibo) {
        parent::__construct($nome, $descrizione, $prezzo, 'Uccelli');
        $this->specie = $specie;
        $this->cibo = $cibo;

        if ($prezzo <= 0) {
            throw new PrezzoNonValido($prezzo);
        }
    }

   
    public function stampaScheda() {
        echo '<div class="col-2 pb-5" >';
        echo '<div class="card" style="width: 18rem;">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $this->nome . '</h5>';
        echo '<h6 class="card-subtitle mb-2">' . $this->categoria . '</h6>';
        echo '<p class="card-text">' . $this->descrizione . '</p>';
        echo '<p class="list-group-item">Specie: ' . $this->specie . '</p>';
        echo '<p class="list-group-item">Cibo: ' . $this->cibo . '</p>';
        echo '<p class="list-group-item">Prezzo: ' . $this->prezzo . ' euro</p>';
        $this->applicaSconto();
        echo "<p>Prezzo scontato: " . $this->prezzo . " euro</p>";
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
