<?php

    class Categorie {
        
        public $nome;
        public $icona;

        public function __construct( String $_nome, String $_icona ) {
            $this->nome = $_nome;
            $this->icona = $_icona;
        }
    }

?>