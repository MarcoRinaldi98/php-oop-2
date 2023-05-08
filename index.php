<?php

    require_once __DIR__ . '/Models/Prodotti.php';
    require_once __DIR__ . '/Database/db.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link di collegamento al cdn di font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link di collegamento al cdn di bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Link di collegamento al mio foglio di style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Titolo del sito -->
    <title> Dogs and Cats </title>
</head>
<body>
    <header class="bg-dark text-center">
        <h1 class="text-white">Dogs and Cats</h1>
    </header>

    <main>
        <div class="container-lg pt-5">
            <div class="row">

                <?php 

                    foreach($prodotti as $prodotto) {

                ?>  

                    <div class="col-6">
                        <div class="card mb-3 position-relative">
                            <div class="ms_dog-or-cat">
                                <i class="<?php echo $prodotto->categoria->icona ?>"></i>
                            </div>
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?php echo $prodotto->immagine ?>" class="rounded-start" alt="<?php echo $prodotto->nome ?>">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title"> <?php echo $prodotto->nome?> </h3>
                                        <p class="card-text"><small class="text-body-secondary"><?php echo $prodotto->prezzo ?></small></p>
                                        <p class="card-text"><small class="text-body-secondary"><?php echo $prodotto->getClassName() ?> per <?php echo $prodotto->categoria->nome ?> </small></p>
                                        <?php
                                            if($prodotto->getClassName() == 'Gioco') { 
                                        ?>
                                            <p class="card-text"><small class="text-body-secondary"><?php echo $prodotto->descrizione ?></small></p>
                                            <p class="card-text"><small class="text-body-secondary"><?php echo $prodotto->dimensioni ?></small></p>
                                        <?php
                                            } else if($prodotto->getClassName() == 'Cibo') {
                                        ?>
                                            <p class="card-text"><small class="text-body-secondary"><?php echo $prodotto->taglia ?></small></p>
                                            <p class="card-text"><small class="text-body-secondary"><?php echo $prodotto->peso ?></small></p>
                                        <?php
                                            } else if ($prodotto->getClassName() == 'Accessorio') {
                                        ?>
                                            <p class="card-text"><small class="text-body-secondary"><?php echo $prodotto->materiale ?></small></p>
                                            <p class="card-text"><small class="text-body-secondary"><?php echo $prodotto->dimensioni ?></small></p>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php

                    }

                ?>
                
            </div>
        </div>
    </main>
    
</body>
</html>