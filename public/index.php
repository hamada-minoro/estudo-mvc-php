<?php
declare(strict_types=1);
require __DIR__ . '/../vendor/autoload.php';
use App\Models\Product;
$products = Product::all();
$filteredProducts = array_filter($products, static fn (array $products) => $product['is_available']);

require __DIR__ . '/../resources/views/index.phtml';
$title = 'My WebStore';

?>
