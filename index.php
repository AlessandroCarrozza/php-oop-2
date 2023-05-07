<?php

require_once __DIR__ . "./Models/Product.php";
require_once __DIR__ . "./Models/Food.php";
require_once __DIR__ . "./Models/Toy.php";
require_once __DIR__ . "./Models/PetHouse.php";

$productOne = new Food("https://www.ideashoppingcenter.it/files/archivio_Files/Foto/44645_2.JPG", "Croccantini secchi", 22, "Dog", "Food", 600);
$productTwo = new Toy("https://ilcerchiodeipet.com/508-large_default/frisbee-per-cani-atomic-flyer-nerf-disco-volante-in-gomma-termoplastica-durevole.jpg", "Fresbee", 40, "Toy", "Dog", 0.5);
$productThree = new PetHouse("https://cdn.shopify.com/s/files/1/0603/8972/0279/products/Cuccia1.png?v=1635764042", "Cuccia morbida", 33, "PetHouse", "Cat", "green");

$productsList = [$productOne, $productTwo, $productThree];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Store OOP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <h1 class="text-center p-4">My Pet Store OOP</h1>

    <div class="container d-flex flex-wrap justify-content-around">
        <?php foreach ($productsList as $product) { ?>
            <div class="card mb-3" style="width: 18rem;">
                <img src="<?php echo $product->image ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product->name ?></h5>
                    <p class="card-text"><?php echo $product->price ?>$</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">type: <?php echo $product->type ?></li>
                </ul>
            </div>
        <?php } ?>
    </div>
</body>
</html>