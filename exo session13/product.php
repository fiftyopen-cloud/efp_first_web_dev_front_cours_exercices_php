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
    <a href="index.php?id=<?= $product['id'] ?>">CTA</a>
</article>
