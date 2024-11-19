<?php
declare(strict_types=1);
$products = [
  [
    'name' => 'XBox',
    'price' => 500,
    'is_available' => true,
  ],
  [
    'name' => 'PlayStation',
    'price' => 600,
    'is_available' => true,
  ],
  [
    'name' => 'Nintendo',
    'price' => 200,
    'is_available' => false,
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Store</title>
</head>
<body>

  <h1>Products Available</h1>
  <?php
    $filteredProducts = array_filter($products, static fn (array $products) => $product['is_available']);
  ?>
  <ul>
    <?php foreach ($filteredProducts as $product): ?>
      <li>
        <strong><?= $product['name'] ?></strong>
        <strong><?= $product['price'] ?></strong>
      </li>
      <?php endforeach;?>
  </ul>
  
</body>
</html>