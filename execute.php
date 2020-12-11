<?php
    
    require_once 'classes/product.php';

    $names = $_POST['name_product'];
    $quantities = $_POST['quantity_product'];
    $prices = $_POST['price_product'];
    $imported = $_POST['imported'];
    $categories = $_POST['category_product'];

    $products = [];

    for ($i = 0; $i <= count($names) - 1; $i++) {
        $product = new Product($names[$i],$quantities[$i],$categories[$i],$imported[$i],$prices[$i]);
        $product->calculateTaxes();
        $products[] = $product;
    }


    $bigTotal = 0;
    $bigTotalTaxes = 0;

    foreach($products as $product) {
        $bigTotal += $product->total;
        $bigTotalTaxes += $product->totalTaxes;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="app.css">
    <title>Reviva</title>
</head>
<body>
    
    <div class="container">

        <div class="products p-3 d-flex flex-wrap justify-content-around align-items-center">

            <?php foreach($products as $product) {?>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->name ?></h5>
                        <p class="card-text"><?php echo 'Imported: '.$product->imported ?></p>
                        <p class="card-text"><?php echo 'Quantity: '.$product->quantity ?></p>
                        <p class="card-text"><?php echo 'Price: '.$product->total ?></p>
                    </div>
                </div>

            <?php } ?>

        </div>

        <h2 class="text-center"> <?php echo 'Sales Taxes :'.$bigTotalTaxes ?></h2>
        <h2 class="text-center"> <?php echo 'Total: '.$bigTotal ?></h2>

    </div>

</body>
</html>
<!-- 
/* Copyright [2020] [Carmelo Zavaglia]

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

  http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License. */ -->

