<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title><?php echo SITENAME ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/gallery.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="header">
        <div class="container">
            <?php
            require APPROOT . '/views/includes/navigation.php';
            ?>
        </div>
    </div>
    </div>

    <div class="small-container all-products">
        <div class="row row-2">
            <h2>All Products</h2>
            <div class="filter-box">
                <a href="Gallery.html" class="current btn-filter" data-filter="all">All</a>
                <a class="btn-filter" data-filter="Singer">Singer Autograph</a>
                <a class="btn-filter" data-filter="Writer">Writer Autograph</a>
                <a class="btn-filter" data-filter="Painter">Painter Autograph</a>
                <a class="btn-filter" data-filter="Random Celebrity">Random Celebrity Autograph</a>

            </div>
        </div>

        <div class="row">
            <div class="col4">
                <a href="product-details-1.html">
                    <img alt="" src="<?php echo URLROOT; ?>/img/product1.jpg">
                </a>
                <h4>MICHAEL JACKSON AUTOGRAPHED THRILLER ALBUM - PSA DNA AND PHOTO PROOF
                </h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p>$12.499,99</p>
            </div>
            <div class="col4">
                <a href="">
                    <img alt="" src="<?php echo URLROOT; ?>/img/product2.jpg"></a>
                <h4>Harry Potter and the Philosophers Stone. TRUE UK 1st Edition 1st Printing and signed by the auther
                </h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p>$57.364,48</p>
            </div>
            <div class="col4">
                <a href="">
                    <img alt="" src="<?php echo URLROOT; ?>/img/product3.jpg"></a>
                <h4>EMINEM RELAPSE CD SIGNED AUTOGRAPHED RARE GOLD SHARPIE</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>$375.00</p>
            </div>
            <div class="col4">
                <a href="">
                    <img alt="" src="<?php echo URLROOT; ?>/img/product4.jpg"></a>
                <h4>LIL PUMP HAND SIGNED AUTOGRAPHED 8X10 HIP HOP RAP MUSIC PHOTO WITH JSA COA RARE</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>$199.99</p>
            </div>
            <div class="page-btn">
                <a href="gallery.html"><span>1</span></a>
                <a href=""><span>2</span></a>
                <a href=""><span>3</span></a>
                <a href=""><span>&#8594;</span></a>
            </div>
        </div>
    </div>

    <!-- footer -->

    <?php
    require APPROOT . '/views/includes/footer.php';
    ?>

    <!-- js for toggle menu -->
    <script src="<?php echo URLROOT; ?>/javascript/toggle_menu.js"></script>
</body>

</html>