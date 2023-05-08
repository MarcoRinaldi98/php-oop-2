<?php 

    require_once __DIR__ . '/Categorie.php';
    require_once __DIR__ . '/Gioco.php';
    require_once __DIR__ . '/Cibo.php';
    require_once __DIR__ . '/Accessorio.php';

    class Prodotti {

        public $immagine;
        public $nome;
        public $prezzo;
        public $categoria;
        

        public function __construct(String $_immagine, String $_nome, float $_prezzo, Categorie $_categoria ) {
            $this->immagine = $_immagine;
            $this->nome = $_nome;
            $this->prezzo = $_prezzo;
            $this->categoria = $_categoria;      
        }
    }

?>