<?php 

    class Cibo extends Prodotti {

        public $taglia;
        public $peso;
        
        public function __construct( String $_immagine, String $_nome, String $_prezzo, String $_type, Categorie $_categoria, String $_taglia, String $_peso) {
            
            parent::__construct($_immagine, $_nome, $_prezzo, $_type, $_categoria);

            $this->ingredienti = $_taglia;
            $this->pesonetto = $_peso;
                  
        }
    }

?>