<?php require('partials/head.php'); ?>

<body>
    <header class="product-add-header">
        <h1>Product Add</h1>
        <div class="header-btns">
    <form action="add-product" id="product_form" method="POST">
            <a href="/"><button type="submit">Save</button></a>
            <a href="/"><button>Cancel</button></a>
        </div>
    </header>

        <label for="sku">SKU</label>
        <input type="text" id="sku" name="sku" required>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
        <label for="price">Price</label>
        <input type="number" id="price" name="price" required>

        <label for="type-switcher">Type Switcher</label>
        <select name="type" id="procuctType">
            <option value="DVD">DVD</option>
            <option value="Furniture">Furniture</option>
            <option value="Book">Book</option>
        </select>

        <!-- <div class="attribute-field">
            <div class="boxed dvd-form">
                <p>Please, provide size</p>
                <label for="size">Size (MB)</label>
                <input type="number" id="size" name="attribute">
            </div>

            <div class="boxed furniture-form">
                <p>Please provide dimensions in HxWxL format</p>
                <label for="height">Height (CM)</label>
                <input type="number" id="height" name="height">
                <label for="width">Width (CM)</label>
                <input type="number" id="width" name="width">
                <label for="length">Length (CM)</label>
                <input type="number" id="length" name="length">
            </div> -->

            <div class="boxed book-form">
                <p>Please, provide weight</p>
                <label for="weight">Weight (KG)</label>
                <input type="number" id="weight" name="attribute">
            </div>
        </div>
    </form>
</body>
<?php require('partials/footer.php'); ?>