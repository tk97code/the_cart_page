<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My guitar shop</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    
    <header>
        <h1 class="header">My guitar shop</h1>
    </header>

    <main>

        <h1>Add item</h1>
        <form action="." method="post">
            <input type="hidden" name="action" value="add">

            <label>Name: </label>
            <select name="productKey">
                <?php foreach($products as $key => $product): 
                    $cost = number_format($product['cost'], 2);
                    $name = $product['name'];
                    $item = $name . ' ($' . $cost . ')';
                ?>

                <option value="<?php echo $key; ?>">
                    <?php echo $item; ?>
                </option>

                <?php endforeach; ?>
            </select> <br>

            <label>Quantity: </label>
            <select name="itemqty">

                <?php for ($i = 1; $i <= 10; $i++): ?>
                   <option value="<?php echo $i; ?>">
                        <?php echo $i; ?>
                   </option> 
                <?php endfor; ?>
            </select> <br>

            <label>&nbsp;</label>
            <input type="submit" value="Add item">
        </form>

        <p><a href=".?action=show_cart">View Cart</a></p>

    </main>

</body>
</html>