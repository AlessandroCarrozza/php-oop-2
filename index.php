<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Toy.php";
require_once __DIR__ . "/Models/PetHouse.php";
require_once __DIR__ . "/Traits/Quantifiable.php";

$productOne = new Food("https://www.ideashoppingcenter.it/files/archivio_Files/Foto/44645_2.JPG", "Croccantini secchi", "Food", "Dog", 600);
$productOne->setPrice(22);
$productOne->quantity = null;

$productTwo = new Toy("https://ilcerchiodeipet.com/508-large_default/frisbee-per-cani-atomic-flyer-nerf-disco-volante-in-gomma-termoplastica-durevole.jpg", "Fresbee", "Toy", "Dog", 0.5);
$productTwo->setPrice(30);
$productTwo->quantity = 86;

$productThree = new PetHouse("https://cdn.shopify.com/s/files/1/0603/8972/0279/products/Cuccia1.png?v=1635764042", "Cuccia d'acciaio", "PetHouse", "Cat", "Green");
$productThree->setPrice(58);
$productThree->quantity = 14;


$productsList = [$productOne, $productTwo, $productThree];
// var_dump($productsList);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Store OOP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 class="text-center p-4">My Pet Store OOP</h1>

    <div class="container d-flex flex-wrap justify-content-around">
        <?php foreach ($productsList as $product) { ?>
            <div class="card mb-3" style="width: 18rem;">
                <span class="animal-label">
                    <?php if ($product->animal == "Dog") { ?>
                        <i class="fa-solid fa-dog"></i>
                    <?php }
                    else { ?>
                        <i class="fa-solid fa-cat"></i>
                    <?php } ?>
                </span>
                <img src="<?php echo $product->image ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product->name ?></h5>
                    <p class="card-text">Price: <?php echo $product->getPrice() ?>$</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between">
                        <span>type: <?php echo $product->type ?></span>
                        <span>
                            <?php if ($product->type == "Food") { ?>
                               Calories: <?php echo $product->calories ?>
                            <?php }
                            elseif ($product->type == "Toy") { ?>
                                Weight: <?php echo $product->weight ?>Kg
                            <?php }
                            elseif ($product->type == "PetHouse") { ?>
                                Color: <?php echo $product->color ?>
                            <?php } ?>                                     
                        </span>
                    </li>

                    <?php if ($product->quantity != null) { ?>
                    <li class="list-group-item">
                        Quantity: <?php echo $product->quantity ?>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
    </div>
</body>
</html>