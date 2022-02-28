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
    <form action="index.php" method="POST">
            <button name="delete-product" value="delete-product-btn" type="submit" id="delete-product-btn" class="btn">MASS DELETE</button>
        </div>
    </header>

        <div class="product-list">

        <?php  foreach($products as $i => $product){ ?>
            <div class="product">
                <input type='checkbox' name='delete-checkbox[]' class='delete-checkbox' value="<?= $i ?>">
                <span><?= $product->sku ?></span>
                <span><?= $product->name ?></span>
                <span><?= $product->price ?></span>
                <span><?= $product->attribute ?></span>

                <!-- Possible type display check solution: -->
                <!-- <span>${product.type == 0 ? 'Size: ' : product.type == 1 ? 'Weight: ' : 'Dimension: '}${product.attribute}</span> -->


            </div>
            <?php  } ?>            
            
        </div>
    </form>
</body>
</html>