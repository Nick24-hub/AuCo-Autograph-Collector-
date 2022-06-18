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
            <div class="navbar">
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
                <a class="current btn-filter" data-filter="all" href="<?php echo URLROOT; ?>/products/gallery/all">All</button>
                    <a class="btn-filter" data-filter="Pop Star" href="<?php echo URLROOT; ?>/products/gallery/pop">Pop Star Autograph</a>
                    <a class="btn-filter" data-filter="Writer" href="<?php echo URLROOT; ?>/products/gallery/writer">Writer Autograph</a>
                    <a class="btn-filter" data-filter="Rap Star" href="<?php echo URLROOT; ?>/products/gallery/rap">Rap Star Autograph</a>
                    <a class="btn-filter" data-filter="Trap Star" href="<?php echo URLROOT; ?>/products/gallery/trap">Trap Star Autograph</a>
                    <a class="btn-filter" data-filter="Actor" href="<?php echo URLROOT; ?>/products/gallery/actor">Actor Autograph</a>
            </div>
        </div>


        <?php $counter = 0;
        $row = 0;
        foreach ($data['products'] as $product) :
            $counter++;
            if ($counter % 4 == 1) {
                $row = 1; ?>
                <div class="row">
                    <?php
                    require APPROOT . '/views/includes/product.php';
                    ?>
                <?php } else  if ($counter % 4 == 0) {
                $row = 0; ?>
                    <?php
                    require APPROOT . '/views/includes/product.php';
                    ?>
                </div>
            <?php } else { ?>
                <?php
                require APPROOT . '/views/includes/product.php';
                ?>
        <?php }
        endforeach;
        if ($row == 1) {
            echo '</div>';
        } ?>
        <div class="row">
            <div class="page-btn">
                <a href="<?php echo URLROOT; ?>/products/gallery/all"><span>1</span></a>
                <a href="<?php echo URLROOT; ?>/products/gallery/all"><span>2</span></a>
                <a href="<?php echo URLROOT; ?>/products/gallery/all"><span>3</span></a>
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