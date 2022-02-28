<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add a product</title>
</head>
<body>
    <header class="product-add-header">
        <h1>Product Add</h1>
        <div class="header-btns">
            <a href="index.php"><button>Save</button></a>
            <a href="index.php"><button>Cancel</button></a>
        </div>
    </header>

    <form action="/product-add.php" id="product_form" method="get">
        <label for="sku">SKU</label>
        <input type="text" id="sku" name="sku">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <label for="price">Price</label>
        <input type="number" id="price" name="price">

        <label for="type-switcher">Type Switcher</label>
        <select name="types" id="procuctType">
            <option value="dvd">DVD</option>
            <option value="furniture">Furniture</option>
            <option value="book">Book</option>
        </select>

        <div class="attribute-field">
            <div class="boxed dvd-form">
                <p>Please, provide size</p>
                <label for="size">Size (MB)</label>
                <input type="number" id="size" name="size">
            </div>

            <div class="boxed furniture-form">
                <p>Please provide dimensions in HxWxL format</p>
                <label for="height">Height (CM)</label>
                <input type="number" id="height" name="height">
                <label for="width">Width (CM)</label>
                <input type="number" id="width" name="width">
                <label for="length">Length (CM)</label>
                <input type="number" id="length" name="length">
            </div>

            <div class="boxed book-form">
                <p>Please, provide weight</p>
                <label for="weight">Weight (KG)</label>
                <input type="number" id="weight" name="weight">
            </div>
        </div>
    </form>
</body>
</html>