<?php

    class Gioco extends Prodotti {

        public $descrizione;
        public $dimensioni;

        public function __construct(String $_immagine, String $_nome, String $_prezzo, String $_type, Categorie $_categoria, String $_descrizione, String $_dimensioni ) {
            
            parent::__construct($_immagine, $_nome, $_prezzo, $_type, $_categoria);

            $this->descrizione = $_descrizione;
            $this->dimensioni = $_dimensioni;
                
        }
    }

?>