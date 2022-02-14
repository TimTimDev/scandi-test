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
    <div class="product-list-header">
        <h1>Product List</h1>
        <a href="product-add.php"><button>ADD</button></a>
        <button id="delete-product-btn">MASS DELETE</button>
    </div>

    <div class="product-list">
        <div class="product">
        <?php
            echo "<input type='checkbox' name='delete-checkbox' id='delete-checkbox'>";
            echo "<span>SKU</span>";
            echo "<span>Name</span>";
            echo "<span>Price</span>";
            echo "<span>Attribute</span>";
        ?>
        </div>
    </div>
</body>
</html>