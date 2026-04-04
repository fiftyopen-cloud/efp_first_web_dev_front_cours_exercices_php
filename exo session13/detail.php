<?php
    require_once './persistance/product.php';
    $product = new Product();
    $product = $product->getByID($_GET['id']);
?>

<article>
    <img src="<?= $product['image'] ?>" alt="Image d'article">
    <h3><?= $product['name'] ?></h3>
    <strong><?= $product['product_type'] ?></strong>
    <strong><?= $product['price'] ?></strong>

    <ol>
        <li>*</li>
        <li>*</li>
        <li>*</li>
        <li>*</li>
        <li>*</li>
    </ol>
    <small><?= $product['created_at'] ?></small>
</article>
 