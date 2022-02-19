<?php

$host = "d98707.mysql.zonevs.eu";
$servername = "d98707_scandi";
$username = "d98707_tester";
$password = "";

/* try {
  $conn = new PDO("mysql:host=$host;dbname=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
} */

$sku = "SKU";
$name = "Name";
$price = "Price";
$attribute = "Attribute";

$products = [
              ["SKU"  => "JS3F225",
              "Name" => "CyberPunk",
              "Price" => 49.99,
              "Size" => 70000], 
              ["SKU"  => "JS3F226",
              "Name" => "xD",
              "Price" => 49,
              "Size" => 70000], 
              ["SKU"  => "JS3F227",
              "Name" => "LoL",
              "Price" => 0.99,
              "Size" => 70000], 
            ];

                    
if(isset($_POST["delete-product"]) && isset($_POST["delete-checkbox"]))
{
  // var_dump(isset($_POST["delete-checkbox"]));
  foreach($_POST["delete-checkbox"] as $i){
    // var_dump($i);
    unset($products[$i]);
  }
}

require 'index.view.php';

/* for($x = 1; $x <= count($products); $x++) {
    echo "<div class='product'>";
    echo "<input type='checkbox' name='delete-checkbox' id='delete-checkbox'>";
    foreach($products as $key => $value) {
        echo "<span> $value </span>";
    }
    echo "</div>";
}
 */



// $checked = $_GET['delete-checkbox'];
// foreach($checked as )



// fix loop
// Add functionality to buttons
// Refactor & reorganize code
// Connect DB