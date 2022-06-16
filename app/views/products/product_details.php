<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title><?php echo SITENAME ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/product_page.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php $main_product = $data['product']; ?>

    <div class="header">
        <div class="container">
            <div class="navbar">
                <?php
                require APPROOT . '/views/includes/navigation.php';
                ?>
            </div>
        </div>
    </div>

    <!-- single product details -->

    <div class="small-container single-product">
        <div class="row">
            <div class="col2">
                <img alt="" src="<?php echo URLROOT; ?>/img/<?php echo $main_product->img; ?>_0.jpg" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img alt="" src="<?php echo URLROOT; ?>/img/<?php echo $main_product->img; ?>_0.jpg" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img alt="" src="<?php echo URLROOT; ?>/img/<?php echo $main_product->img; ?>_1.jpg" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img alt="" src="<?php echo URLROOT; ?>/img/<?php echo $main_product->img; ?>_2.jpg" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img alt="" src="<?php echo URLROOT; ?>/img/<?php echo $main_product->img; ?>_3.jpg" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col2">
                <p><?php echo $main_product->category; ?></p>
                <h1>
                    <?php echo $main_product->title; ?>
                </h1>
                <?php if ($main_product->for_sale && $main_product->user_id != $_SESSION['user_id']) { ?>
                    <h4>$<?php echo $main_product->price; ?></h4>
                    <form action="<?php echo URLROOT; ?>/carts/add/<?php echo $main_product->id; ?>" method="POST">
                        <button type="submit" class="btn">Buy</button>
                    </form>
                <?php
                } else echo "<h3>Not available for buying</h3><br>" ?>
                <h3>Product Details</h3>
                <br>
                <p> <?php echo $main_product->details; ?>
                </p>
            </div>
        </div>
    </div>

    <!--  title  -->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <a href="<?php echo URLROOT; ?>/products/gallery/all">
                <p>View More</p>
            </a>
        </div>
    </div>


    <!-- products -->

    <div class="small-container">
        <div class="row">
            <?php $counter = 0;
            foreach ($data['related_products'] as $product) :
                $counter++;
                if ($counter == 5) {
                    break;
                }
                require APPROOT . '/views/includes/product.php';
            endforeach; ?>
        </div>
    </div>

    <!-- footer -->

    <?php
    require APPROOT . '/views/includes/footer.php';
    ?>

    <!-- js for product gallery -->
    <script src="<?php echo URLROOT; ?>/javascript/product_gallery.js"></script>

    <!-- js for toggle menu -->
    <script src="<?php echo URLROOT; ?>/javascript/toggle_menu.js"></script>
</body>

</html>