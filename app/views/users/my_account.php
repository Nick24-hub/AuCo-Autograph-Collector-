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
            <form class="contact-items" action="<?php echo URLROOT; ?>/users/edit_my_account/<?php echo $_SESSION['user_id']; ?>" method="POST">
                <h2>Edit account data</h2>
                <label for="username">User name:</label>
                <input type="text" name="username" placeholder="<?php echo $data['username'] ?>">
                <label for="email">E-mail:</label>
                <input type="email" name="email" placeholder="<?php echo $data['email'] ?>">
                <label for="current_password">Current password: </label>
                <input type="password" name="current_password">
                <label for="new_password">New password: </label>
                <input type="password" name="new_password">
                <label for="confirm_password">Confirm new password: </label>
                <input type="password" name="confirm_password">
                <button type="submit" name="contact-submit" class="btn">Submit</button>
                <?php
                echo $data['usernameError'];
                echo $data['emailError'];
                echo $data['passwordError'];
                echo $data['confirmPasswordError'];
                echo $data['currentPasswordError'];
                ?>
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