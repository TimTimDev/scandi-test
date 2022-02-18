<?php

$host = "d98707.mysql.zonevs.eu";
$servername = "d98707_scandi";
$username = "d98707_tester";
$password = "Mulletman13";

try {
  $conn = new PDO("mysql:host=$host;dbname=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

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

// Refactor & reorganize code
// Add functionality to buttons
// Connect DB
