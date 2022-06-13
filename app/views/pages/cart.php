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
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <a href="product-details-1.php">
                            <img src="images\product1.jpg">
                        </a>
                        <div>
                            <p>JORESTECH Hard Hat White</p>
                            <small>Price: $26.99</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$26.99</td>
            </tr>

        </table>

        <div class="total-price">

        </div>
        <?php
        ini_set('error_reporting', 0);
        ini_set('display_errors', 0);
        $var = null;
        if (isset($_SESSION["userUid"])) {
            $var = $_SESSION["userUid"];
        }
        if ($var != null) {
            echo "<div class='buy'></div>";
        } else {
            echo "<div class='buy1'></div>";
        }
        ?>

    </div>

    <!-- footer -->

    <?php
    require APPROOT . '/views/includes/footer.php';
    ?>


    <!-- js for toggle menu -->
    <script src="<?php echo URLROOT ?>/javascript/toggle_menu.js"></script>

</body>

</html>