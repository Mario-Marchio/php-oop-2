<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous'/>
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
        <div class="row">
            <?php
            
                require_once 'Category.php';
                require_once 'Product.php';
                require_once 'AnimalProduct.php';

                $categoryDog = new Category("Cane");
                $categoryCat = new Category("Gatto");
                $categoryBird = new Category("Uccelli");
                $categoryFish = new Category("Pesci");
            
                $products = array(
                new AnimalProduct("Royal Canin Mini Adult", 23, "https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg", $categoryDog),
                new AnimalProduct("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", 44, "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg", $categoryDog),
                new AnimalProduct("Almo Nature Cat Daily Lattina", 43, "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", $categoryCat),
                new AnimalProduct("Mangime per Pesci Guppy in Fiocchi", 12, "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", $categoryFish),
                new AnimalProduct("Voliera Wilma in Legno", 18, "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", $categoryBird),
                new AnimalProduct("Cartucce Filtranti per Filtro EasyCrystal", 4, "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", $categoryFish),
                new AnimalProduct("Kong Classic", 9, "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", $categoryDog),
                new AnimalProduct("Topini di peluche Trixie", 2, "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", $categoryCat)
                );
                foreach ($products as $product) {
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card">';
                echo '<img src="' . $product->getPhotoUrl() . '" class="card-img-top" alt="' . $product->getName() . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $product->getName() . '</h5>';
                echo '<p class="card-text">Categoria: ' . $product->getCategory()->getName() . '</p>';
                echo '<p class="card-text">Prezzo: ' . $product->getFormattedPrice() . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                }
            ?> 
      </div>
</div> 
</body>
</html>
