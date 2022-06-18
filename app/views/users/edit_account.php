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
            <form class="contact-items" action="<?php echo URLROOT;?>/users/edit_user/<?php echo $data->id;?>" method="POST">
                <h2>Edit Account</h2>
                <label for="username">Username:</label>
                <input type="text" name="username" value="<?php echo $data->username ?>">
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