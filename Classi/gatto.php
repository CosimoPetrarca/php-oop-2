<?php
require_once 'Prodotto.php';

class Gatto extends Prodotto {

    use Sconto;
    
    public $razza;
    public $eta;

    public function __construct($nome, $descrizione, $prezzo, $razza, $eta) {
        parent::__construct($nome, $descrizione, $prezzo, 'Gatto');
        $this->razza = $razza;
        $this->eta = $eta;

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
        echo '<p class="list-group-item">Razza: ' . $this->razza . '</p>';
        echo '<p class="list-group-item">Taglia: ' . $this->eta . '</p>';
        echo '<p class="list-group-item">Prezzo: ' . $this->prezzo . ' euro</p>';
        $this->applicaSconto();
        echo "<p>Prezzo scontato: " . $this->prezzo . " euro</p>";
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
