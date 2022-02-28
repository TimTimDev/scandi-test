<?php

$database = require 'bootstrap.php';

$products = $database->selectAll('Products');

if(isset($_POST["delete-product"]) && isset($_POST["delete-checkbox"]))
{
  // var_dump(isset($_POST["delete-checkbox"]));
  foreach($_POST["delete-checkbox"] as $i){
    // var_dump($i);
    unset($products[$i]);
  }
}

require 'index.view.php';

// $checked = $_GET['delete-checkbox'];
// foreach($checked as )

// Refactor & reorganize code