<?php
require APPROOT . '/views/includes/head.php';
?>

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
                    <img alt="" src="../public/img/background.png">
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
                        </form>

                        <form id="RegForm" id="register-form" method="POST" action="<?php echo URLROOT; ?>/users/register">
                            <input type="text" name="username" placeholder="Username">
                            <input type="email" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Password">
                            <input type="password" name="confirmPassword" placeholder="Confirm Password">
                            <button type="submit" name="register-submit" class="btn">Register</button>
                            <a>
                                <?php echo $data['passwordError']; ?>
                            <a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img alt="" src="../public/img/app-logo1.png">
                        <img alt="" src="../public/img/app-logo2.png">
                    </div>
                </div>
                <div class="footer-col2">
                    <img alt="" src="../public/img/autograf-logo.png">
                    <p>Our Purpose Is To Help You Maintain Your Autograph Collection Safe.</p>
                </div>
                <div class="footer-col3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a href="../csv/product.csv" download="product.csv">
                                Download products as CSV file</a></li>
                        <li><a href="">View Statistics</a></li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022 AuCo (Autograph Collector)</p>
        </div>
    </div>




    <!-- js for toggle menu -->
    <script src="../JS/toggle_menu.js"></script>

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