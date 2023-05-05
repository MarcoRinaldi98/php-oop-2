<?php 

    require_once __DIR__ . '/Categorie.php';
    require_once __DIR__ . '/Gioco.php';
    require_once __DIR__ . '/Cibo.php';
    require_once __DIR__ . '/Accessorio.php';

    class Prodotti {

        public $immagine;
        public $nome;
        public $prezzo;
        public $type;
        public $categoria;
        

        public function __construct(String $_immagine, String $_nome, String $_prezzo, String $_type, Categorie $_categoria ) {
            $this->immagine = $_immagine;
            $this->nome = $_nome;
            $this->prezzo = $_prezzo;
            $this->type = $_type;
            $this->categoria = $_categoria;      
        }
    }

?>