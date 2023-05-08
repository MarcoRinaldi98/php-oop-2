<?php 

    require_once __DIR__ . '/../Traits/Weightable.php';

    class Cibo extends Prodotti {

        use Weightable;

        public $taglia;
        
        public function __construct( String $_immagine, String $_nome, float $_prezzo, Categorie $_categoria, String $_taglia) {
            
            parent::__construct($_immagine, $_nome, $_prezzo, $_categoria);

            $this->taglia = $_taglia;
                  
        }

        public function getClassName() {
            return get_class();
        }
    }

?>