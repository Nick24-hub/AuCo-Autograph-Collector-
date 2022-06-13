<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title><?php echo SITENAME ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/account.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
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

    <!-- account page -->

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col2">
                    <img alt="" src="<?php echo URLROOT ?>/public/img/background.png">
                </div>
                <div class="col2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Log in</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>

                        <form id="LoginForm" action="<?php echo URLROOT; ?>/users/login" method="POST">
                            <input type="text" name="username" placeholder="Username\Email">
                            <input type="password" name="password" placeholder="Password">
                            <button type="submit" name="login-submit" class="btn" value="submit">Login</button>
                            <a href="reset-password.php">Forgot password?</a>
                            <p>
                                <?php
                                echo $data['usernameError'];
                                echo $data['passwordError'];
                                ?>
                            </p>

                        </form>

                        <form id="RegForm" id="register-form" method="POST" action="<?php echo URLROOT; ?>/users/register">
                            <input type="text" name="username" placeholder="Username">
                            <input type="email" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Password">
                            <input type="password" name="confirmPassword" placeholder="Confirm Password">
                            <button type="submit" name="register-submit" class="btn">Register</button>
                            <p>
                                <?php 
                                echo $data['usernameError'];
                                // echo $data['emailError'];
                                echo $data['passwordError'];
                                //echo $data['confirmPasswordError'];
                                ?>
                            <p>
                        </form>

                    </div>
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

    <!-- js for toggle form -->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }

        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0)";
        }
    </script>

</body>

</html>