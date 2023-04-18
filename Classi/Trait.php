<?php

trait Sconto {
    public function applicaSconto() {
        $this->prezzo *= 0.9;
    }
}
