
<?php
    require_once './persistance/product.php';
    
    $product = new Product();
    $products = $product->getCatalog();

    foreach ($products as $product) {
        include './product.php';
    }
?>