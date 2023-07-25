<?php
            
    require_once 'Category.php';
    require_once 'Product.php';
    require_once 'AnimalProduct.php';


            
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
