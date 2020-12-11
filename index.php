<?php

    require_once 'classes/product.php';

    $product1 = new Product('bottle of porfume',1,'porfume',TRUE,27.99);
    $product2 = new Product('music CD',1,'music',FALSE,14.99);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- CSS -->
    <link rel="stylesheet" href="app.css">
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <!-- JS -->
    <script src="app.js"></script>
    <title>Reviva</title>
</head>
<body>
    
    <div class="container">

        <form action="execute.php" method="POST">
            <div class="form-group product_create product_append">
                <label for="exampleFormControlInput1">Nome</label>
                <input type="text" class="form-control" name="name_product[]" required>
                <label for="quantity_product">Quantity</label>
                <input type="number" class="form-control" name="quantity_product[]" required>
                <label for="price_product">Price</label>
                <input type="number" step="0.01" class="form-control" name="price_product[]" required>
                <label for="imported">Imported?</label>
                <select class="form-control" name="imported[]" required>
                    <option value="TRUE">yes</option>
                    <option value="FALSE">no</option>
                </select>
                <label for="category_product">Category</label>
                <input type="text" class="form-control" name="category_product[]" required>
            </div>
            <div class="form-group" id="add-product"><i class="fas fa-plus-square"></i> AGGIUNGI RIGA</div>
            <button type="submit" class="d-block">CREATE</button>
        </form>

    </div>

    <div id="product-for-clone">
        <div class="form-group product_create">
            <label for="exampleFormControlInput1">Nome</label>
            <input type="text" class="form-control" name="name_product[]" required>
            <label for="quantity_product">Quantity</label>
            <input type="number" class="form-control" name="quantity_product[]" required>
            <label for="price_product">Price</label>
            <input type="number" step="0.01" class="form-control" name="price_product[]" required>
            <label for="imported">Imported?</label>
            <select class="form-control" name="imported[]" required>
                <option value="TRUE">yes</option>
                <option value="FALSE">no</option>
            </select>
            <label for="category_product">Category</label>
            <input type="text" class="form-control" name="category_product[]" required>
        </div>
    </div>

</body>
</html>

<!-- /* Copyright [2020] [Carmelo Zavaglia]

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

  http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License. */ -->