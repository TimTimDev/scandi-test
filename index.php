<?php

$sku = "SKU";
$name = "Name";
$price = "Price";
$attribute = "Attribute";

$products = array(
                    "SKU"  => array("JS3F225", "JS3F226", "JS3F227"),
                    "Name" => ["CyberPunk", "Rust", "LoL"],
                    "Price" => [49.99, 19.99, 0],
                    "Size" => [70000, 40000, 12000] 
                );

                    
require 'index.view.php';

echo "<div class='product-list'>";

foreach($products as $product) {
    echo "<div class='product'>";
    echo "<input type='checkbox' name='delete-checkbox' id='delete-checkbox'>";
    echo "<span> $product[0] </span>";
    echo "<span> $product[1] </span>";
    echo "<span> $product[2] </span>";
    echo "<span> $product[3] </span>";
    echo "</div>";
}

echo "</div>";