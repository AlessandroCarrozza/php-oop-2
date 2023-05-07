<?php

require_once __DIR__ . "./Models/Product.php";
require_once __DIR__ . "./Models/Food.php";
require_once __DIR__ . "./Models/Toy.php";
require_once __DIR__ . "./Models/PetHouse.php";

$productOne = new Food("", "Croccantini secchi", 22, "Food", "Dog", 600);
$productTwo = new Food("", "Croccantini secchi", 22, "Food", "Dog", 600);
$productThree = new Food("", "Croccantini secchi", 22, "Food", "Dog", 600);
$productFour = new Food("", "Croccantini secchi", 22, "Food", "Dog", 600);

$productsList = $productOne;
$productsList = $productTwo;
$productsList = $productThree;
$productsList = $productFour;


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
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product->name ?></h5>
                    <p class="card-text">price</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">type</li>
                </ul>
            </div>
        <?php } ?>
    </div>
</body>
</html>