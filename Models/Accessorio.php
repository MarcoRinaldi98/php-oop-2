<?php

    class Accessorio extends Prodotti {
        public $materiale;
        public $dimensioni;

        public function __construct( String $_immagine, String $_nome, String $_prezzo, Categorie $_categoria, String $_materiale, String $_dimensioni) {

            parent::__construct($_immagine, $_nome, $_prezzo, $_categoria);

            $this->materiale = $_materiale;
            $this->dimensioni = $_dimensioni;
        }

        public function getClassName() {
            return get_class();
        }
    }

?>