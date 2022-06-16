<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title><?php echo SITENAME ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/contact.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php $product = $data['product'] ?>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <?php
                require APPROOT . '/views/includes/navigation.php';
                ?>
            </div>
        </div>
    </div>

    <!-- contact form -->
    <div class="contact">
        <div class="contact-text">
            <form class="contact-items" action="<?php echo URLROOT; ?>/products/editProduct/<?php echo $product->id ?>" method="POST">
                <h2>Edit Item</h2>
                <label for="title">Item title:</label>
                <input type="text" name="title" value="<?php echo $product->title ?>">
                <label for="category">Item category:</label>
                <input type="text" name="category" value="<?php echo $product->category ?>">
                <label for="details">Item Details:</label>
                <textarea name="details" rows="4" cols="50"><?php echo $product->details ?></textarea>
                <div class="special-items">
                    <label for="price">Item Price:</label>
                    <input type="number" step="0.01" name="price" value="<?php echo $product->price ?>">
                    <label for="forSale">For sale:</label>
                    <?php $for_sale = $product->for_sale; ?>
                    <input type='hidden' value=0 name='for_sale'>
                    <input type="checkbox" name="for_sale" value=1 <?php if ($for_sale) echo 'checked'; ?> onclick=<?php $for_sale = !$for_sale; ?>>
                </div>
                <button type="submit" name="contact-submit" class="btn">Submit</button>
            </form>
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