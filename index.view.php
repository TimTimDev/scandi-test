<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Product List</title>
</head>
<body>
    <header class="product-list-header">
        <h1>Product List</h1>
        <div class="header-btns">
            <a href="product-add.php" class="btn"><button>ADD</button></a>
            <button id="delete-product-btn" class="btn">MASS DELETE</button>
        </div>
    </header>

    <div class="product-list">
        <div class="product">
            <input type='checkbox' name='delete-checkbox' id='delete-checkbox'>
            <span><?= $sku ?></span>
            <span><?= $name ?></span>
            <span><?= $price ?></span>
            <span><?= $attribute ?></span>
        </div>
        <div class="product">
            <input type='checkbox' name='delete-checkbox' id='delete-checkbox'>
            <span><?= $sku ?></span>
            <span><?= $name ?></span>
            <span><?= $price ?></span>
            <span><?= $attribute ?></span>
        </div>
    </div>
</body>
</html>