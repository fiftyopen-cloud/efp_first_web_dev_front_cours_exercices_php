
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>exo session 13 - ProductCatalogue</title>
  </head>
  <body>
    
    <main class="container">
      <?php
        echo '<h1>Product Catalogue</h1>';

        if (empty($_GET)) {
          include 'catalog.php';
        } else {
          include 'detail.php';
        }
      ?>
    </main>
    
  </body>
</html>
