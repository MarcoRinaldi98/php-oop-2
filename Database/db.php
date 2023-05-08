<?php

    $cani = new Categorie('cane', 'fa-solid fa-dog');
    $gatti = new Categorie('gatto', 'fa-solid fa-cat');

    $prodotti = [
        new Gioco('img/osso.jpg', 'Osso di gomma', 5.99 , $cani, 'Le forme sono studiate per mantenere sane le gengive e i denti del cane', '11 x 4.7 x 4 cm'),
        new Gioco('img/gomitolo.jpg', 'Gomitolo', 4.99 , $gatti, 'Facile da afferrare con i loro artigli', '28 x 14 x 6 cm'),

        new Cibo('img/bocconcini.jpg', 'kitekat bocconcini di pollo', 1.05 , $gatti, 'adult', '100 gr'),
        new Cibo('img/croccantini.jpg', 'Ultima Croccantini', 23.99 , $cani, 'adult', '10 kg'),

        new Accessorio('img/cuccia.jpg', 'Cuccia per cani', 129.95 , $cani, 'legno massello', '82cmx72cmx85cm'),
        new Accessorio('img/lettiera.jpg', 'Lettiera per gatti', 24.99 , $gatti, 'plastica', '30cm x 30cm')
    ];

    try {
        $prodotti[2]->setWeight(100, 'gr');
    } catch (Exception $e) {
        echo "Si è verificato un errore: " . $e->getMessage();
    }
    try {
        $prodotti[3]->setWeight(10, 'kg');
    } catch (Exception $e) {
        echo "Si è verificato un errore: " . $e->getMessage();
    }

?>