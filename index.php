<?php

$sku = "SKU";
$name = "Name";
$price = "Price";
$attribute = "Attribute";

$products = array(
                    "SKU"  => ["JS3F225", "JS3F226", "JS3F227", "JS3F228"],
                    "Name" => ["CyberPunk", "Rust", "LoL", "GTAV"],
                    "Price" => [49.99, 19.99, 0, 39.99],
                    "Size" => [70000, 40000, 12000, 80000] 
                );

                    
require 'index.view.php';

echo "<div class='product-list'>";

for($x = 0; $x <= count($product); $x++) {
    echo "<div class='product'>";
    echo "<input type='checkbox' name='delete-checkbox' id='delete-checkbox'>";
    foreach($products as $product) {
        echo "<span> $product[$x] </span>";
    }
    echo "</div>";
}

echo "</div>";