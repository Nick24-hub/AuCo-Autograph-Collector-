<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title><?php echo SITENAME ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/cart.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- header -->
    <div class="header">
        <div class="container">
            <div class="navbar">
                <?php
                require APPROOT . '/views/includes/navigation.php';
                ?>
            </div>
        </div>
    </div>
    <!---- cart items details ---->
    <div class="small-container cart-page">

        <table class="x">
            <tr>
                <th>Product</th>
                <th>Subtotal</th>
            </tr>
            <?php
            $total_price = 0;
            foreach ($data as $product) { ?>
                <tr>
                    <td>
                        <div class="cart-info">
                            <a href="<?php echo URLROOT; ?>/products/product_details/<?php echo $product->id; ?>">
                                <img src="<?php echo URLROOT; ?>/img/<?php echo $product->img_0; ?>">
                            </a>
                            <div>
                                <p><?php echo $product->title ?></p>
                                <small>Price: $<?php echo $product->price;
                                                $total_price = $total_price + $product->price; ?>
                                </small>
                                <br>
                                <form action="<?php echo URLROOT; ?>/carts/remove/<?php echo $product->id; ?>" method="POST">
                                    <button style=background-color:orange type="submit">Remove</button>
                                </form>
                            </div>

                        </div>
                    </td>
                    <td>$<?php echo $product->price; ?></td>
                </tr>
            <?php } ?>

        </table>

        <div class="total-price">
            <?php if ($total_price != 0) { ?>
                <table>
                    <tr>
                        <td>Total Price</td>
                        <td>$<?php echo $total_price; ?></td>
                    </tr>
                </table>
            <?php } ?>

        </div>
        <?php if ($total_price != 0) { ?>
            <form action="<?php echo URLROOT; ?>/carts/checkout" method="POST">
                <button type="submit" class="btn">CHECKOUT</button>
            </form>
        <?php } else { ?><br><a>No Products in cart</a>
        <?php } ?>
    </div>

    <!-- footer -->

    <?php
    require APPROOT . '/views/includes/footer.php';
    ?>


    <!-- js for toggle menu -->
    <script src="<?php echo URLROOT ?>/javascript/toggle_menu.js"></script>
</body>

</html>