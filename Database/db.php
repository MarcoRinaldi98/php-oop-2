<?php

    $cani = new Categorie('cane', 'fa-solid fa-dog');
    $gatti = new Categorie('gatto', 'fa-solid fa-cat');

    $prodotti = [
        new Gioco('img/osso.jpg', 'Osso di gomma', '5,99 €', 'Gioco', $cani, 'Le forme sono studiate per mantenere sane le gengive e i denti del cane', '11 x 4.7 x 4 cm'),
        new Gioco('img/gomitolo.jpg', 'Gomitolo', '4,99 €', 'Gioco', $gatti, 'Facile da afferrare con i loro artigli', '28 x 14 x 6 cm'),

        new Cibo('img/bocconcini.jpg', 'kitekat bocconcini di pollo', '1,05 €', 'Cibo', $gatti, 'adult', '100 gr'),
        new Cibo('img/croccantini.jpg', 'Ultima Croccantini', '23,90 €', 'Cibo', $cani, 'adult', '10 kg'),

        new Accessorio('img/cuccia.jpg', 'Cuccia per cani', '129,95 €', 'Accessorio', $cani, 'legno massello', '82cmx72cmx85cm'),
        new Accessorio('img/lettiera.jpg', 'Lettiera per gatti', '24,90 €', 'Accessorio', $gatti, 'plastica', '30cm x 30cm')
    ];

?>