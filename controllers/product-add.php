<?php

require 'views/product-add.view.php';

$app['database']->insert('Products', [

    'sku'       => $_POST['sku'],
    'name'      => $_POST['name'],
    'price'     => $_POST['price'],
    'type'      => $_POST['type'],
    'attribute' => $_POST['attribute']
    /* 'attribute' => [
        'size' => $_POST['size'],
        'height' => $_POST['height'],
        'width' => $_POST['width'],
        'length' => $_POST['length'],
        'weight' => $_POST['weight']
    ] */
]);

header('Location: /');