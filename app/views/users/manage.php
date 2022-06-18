<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title><?php echo SITENAME ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/cart.css">
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
        </div>
    </div>
    <!---- cart items details ---->
    <div class="small-container cart-page">

        <table class="x">
            <tr>
                <th>Account Info</th>
                <th>Options</th>
            </tr>
            <?php
            foreach ($data as $account) { ?>
                <tr>
                    <td>
                        <div class="cart-info">
                            <div>
                                <p>Account Name: <?php echo $account->username ?></p>
                                <small>Email: <?php echo $account->email; ?>
                                </small>
                                <br>
                            </div>

                        </div>
                    </td>
                    <td>
                        <form action="<?php echo URLROOT;?>/users/remove/<?php echo $account->id;?>" method="POST">
                            <button style=background-color:Red type="submit">Remove</button>
                        </form>
                        <form action="<?php echo URLROOT;?>/users/edit_account/<?php echo $account->id;?>" method="POST">
                            <button style=background-color:orange type="submit">Edit</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- footer -->

    <?php
    require APPROOT . '/views/includes/footer.php';
    ?>


    <!-- js for toggle menu -->
    <script src="<?php echo URLROOT ?>/javascript/toggle_menu.js"></script>
</body>

</html>