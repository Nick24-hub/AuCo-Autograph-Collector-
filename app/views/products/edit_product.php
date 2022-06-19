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
                <label for="img">Item images:</label>


                <input type="file" id="image_input1" name="img_0" accept="image/jpg" value="<?php echo $product->img_0; ?>">
                <div id="display_image1">
                    <img style="width: 80px; height: 100px; margin-right: 10px;">
                </div>
                <input type="file" id="image_input2" name="img_1" accept="image/jpg" value="<?php echo $product->img_1; ?>">
                <div id="display_image2">
                    <img style="width: 80px; height: 100px; margin-right: 10px;">
                </div>
                <input type="file" id="image_input3" name="img_2" accept="image/jpg" value="<?php echo $product->img_2; ?>">
                <div id="display_image3">
                    <img style="width: 80px; height: 100px; margin-right: 10px;">
                </div>
                <input type="file" id="image_input4" name="img_3" accept="image/jpg" value="<?php echo $product->img_3; ?>">
                <div id="display_image4">
                    <img style="width: 80px; height: 100px; margin-right: 10px;">
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

    <!-- js for img -->
    <script>
        const image_input1 = document.querySelector("#image_input1");
        const display_image1 = document.querySelector("#display_image1");
        display_image1.style.backgroundImage = `url(<?php echo URLROOT; ?>/img/<?php echo $product->img_0; ?>)`
        var uploaded_image1 = "";

        image_input1.addEventListener("change", function() {
            const reader = new FileReader();
            reader.addEventListener("load", () => {
                uploaded_image1 = reader.result;
                display_image1.style.backgroundImage = `url(${uploaded_image1})`;
            });
            reader.readAsDataURL(this.files[0]);
        })

        const image_input2 = document.querySelector("#image_input2");
        const display_image2 = document.querySelector("#display_image2");
        display_image2.style.backgroundImage = `url(<?php echo URLROOT; ?>/img/<?php echo $product->img_1; ?>)`
        var uploaded_image2 = "";

        image_input2.addEventListener("change", function() {
            const reader = new FileReader();
            reader.addEventListener("load", () => {
                uploaded_image2 = reader.result;
                display_image2.style.backgroundImage = `url(${uploaded_image2})`;
            });
            reader.readAsDataURL(this.files[0]);
        })

        const image_input3 = document.querySelector("#image_input3");
        const display_image3 = document.querySelector("#display_image3");
        display_image3.style.backgroundImage = `url(<?php echo URLROOT; ?>/img/<?php echo $product->img_2; ?>)`
        var uploaded_image3 = "";

        image_input3.addEventListener("change", function() {
            const reader = new FileReader();
            reader.addEventListener("load", () => {
                uploaded_image3 = reader.result;
                display_image3.style.backgroundImage = `url(${uploaded_image3})`;
            });
            reader.readAsDataURL(this.files[0]);
        })

        const image_input4 = document.querySelector("#image_input4");
        const display_image4 = document.querySelector("#display_image4");
        display_image4.style.backgroundImage = `url(<?php echo URLROOT; ?>/img/<?php echo $product->img_3; ?>)`
        var uploaded_image4 = "";

        image_input4.addEventListener("change", function() {
            const reader = new FileReader();
            reader.addEventListener("load", () => {
                uploaded_image4 = reader.result;
                display_image4.style.backgroundImage = `url(${uploaded_image4})`;
            });
            reader.readAsDataURL(this.files[0]);
        })
    </script>

</body>

</html>