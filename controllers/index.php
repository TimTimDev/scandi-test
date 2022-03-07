<?php

$products = $app['database']->selectAll('Products');

if(isset($_POST["delete-product"]) && isset($_POST["delete-checkbox"]))
{
  // var_dump(isset($_POST["delete-checkbox"]));
  foreach($_POST["delete-checkbox"] as $i){
    // var_dump($i);
    unset($products[$i]);
  }
}

// $checked = $_GET['delete-checkbox'];
// foreach($checked as )

require 'views/index.view.php';