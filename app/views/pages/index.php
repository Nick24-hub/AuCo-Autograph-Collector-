<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title><?php echo SITENAME ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/home.css">
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
            <div class="row">
                <div class="col2">
                    <h1>
                        Inspire yourself!
                    </h1>
                    <p>Anything you love more, fear more, serve more, or value more than God is your idol.</p>
                    <p>Here you can find your idol autograph.</p>
                    <a href="<?php echo URLROOT; ?>/products/gallery/all" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col2">
                    <img alt="" src="<?php echo URLROOT ?>/public/img/background.png">
                </div>
            </div>
        </div>
    </div>

    <!-- featured categories -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col3">
                    <img alt="" src="<?php echo URLROOT ?>/public/img/category1.png">
                </div>
                <div class="col3">
                    <img alt="" src="<?php echo URLROOT ?>/public/img/category2.png">
                </div>
                <div class="col3">
                    <img alt="" src="<?php echo URLROOT ?>/public/img/category3.png">
                </div>
            </div>
        </div>
    </div>

    <!-- featured autographs -->
    <div class="small-container">
        <h2 class="title">Featured Autographs</h2>
        <div class="row">
            <div class="col4">
                <a href="product-details-1.html">
                    <img alt="" src="<?php echo URLROOT ?>/public/img/1_0.jpg">
                </a>
                <h4>MICHAEL JACKSON AUTOGRAPHED THRILLER ALBUM - PSA DNA AND PHOTO PROOF</h4>
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
                <a href="product-details-2.html">
                    <img alt="" src="<?php echo URLROOT ?>/public/img/2_0.jpg"></a>
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
                <a href="product-details-3.html">
                    <img alt="" src="<?php echo URLROOT ?>/public/img/3_0.jpg"></a>
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
                <a href="product-details-4.html">
                    <img alt="" src="<?php echo URLROOT ?>/public/img/4_0.jpg"></a>
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
        </div>

    </div>

    <!-- offer -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col2">
                    <img alt="" src="<?php echo URLROOT ?>/public/img/offer1.png" class="offer-img">
                </div>
                <div class="col2">
                    <p>Exclusively Available on AuCo (Autograph Collector)</p>
                    <h1>Leonardo DiCaprio Autograph Signature</h1>
                    <small>The autograph of the great actor Leonardo DiCaprio written on blue ink paper on July 20, 2021
                        at The thrd annual Saint-Tropez Gala by Leonardo DiCaprio Foundation </small>
                    <a href="<?php echo URLROOT; ?>/products/product_details/5 ?>" class="btn">Explore Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>

    <!-- creators -->
    <div class="creators">
        <div class="small-container">
            <h2 class="title">Page creators</h2>
            <div class="row">
                <div class="col2">
                    <img alt="" src="<?php echo URLROOT ?>/public/img/creator1.jpg">
                    <h3>Alexandrescu Nicolae</h3>
                </div>
                <div class="col2">
                    <img alt="" src="<?php echo URLROOT ?>/public/img/creator2.jpg">
                    <h3>Vacaru Stefan Robert</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->

    <?php
    require APPROOT . '/views/includes/footer.php';
    ?>


    <!-- js for toggle menu -->
    <script src="<?php echo URLROOT ?>/javascript/toggle_menu.js"></script>

</body>

</html>