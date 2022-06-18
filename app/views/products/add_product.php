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
            <form class="contact-items" action="<?php echo URLROOT; ?>/products/addProduct/<?php echo $_SESSION['user_id'] ?>" method="POST">
                <h2>Add Item</h2>
                <label for="title">Item title:</label>
                <input type="text" name="title" placeholder="Michael Jackson autograph">
                <label for="category">Item category:</label>
                <input type="text" name="category" placeholder="Pop Stars">
                <label for="details">Item Details:</label>
                <textarea name="details" rows="4" cols="50">Written on paper at 01.10.1992 concert from Bucharest</textarea>
                <div class="special-items">
                    <label for="price">Item Price:</label>
                    <input type="number" step="0.01" name="price" placeholder="14999.99">
                    <label for="forSale">For sale:</label>
                    <?php $for_sale = 0; ?>
                    <input type='hidden' value=0 name='for_sale'>
                    <input type="checkbox" name="for_sale" value=1 <?php if ($for_sale) echo 'checked'; ?> onclick=<?php $for_sale = !$for_sale; ?>>
                </div>
                <label for="img">Item images:</label>


                <input type="file" id="image_input1" name="img" accept="image/jpg">
                <div id="display_image1"></div>
                <input type="file" id="image_input2" accept="image/jpg">
                <div id="display_image2"></div>
                <input type="file" id="image_input3" accept="image/jpg">
                <div id="display_image3"></div>
                <input type="file" id="image_input4" accept="image/jpg">
                <div id="display_image4"></div>
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

    <!-- js for img -->
    <script src="<?php echo URLROOT; ?>/javascript/img.js"></script>

</body>

</html>