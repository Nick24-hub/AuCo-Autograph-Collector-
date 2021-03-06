<div class="logo">
    <a href="<?php echo URLROOT; ?>/pages/index">
        <img alt="" src="<?php echo URLROOT ?>/public/img/autograf-logo.png" width="150" height="150">
    </a>
</div>
<nav>
    <ul id="MenuItems">
        <li><a href="<?php echo URLROOT; ?>/pages/index">Home</a></li>
        <li><a href="<?php echo URLROOT; ?>/products/gallery/all">Gallery</a></li>
        <li><a href="<?php echo URLROOT; ?>/pages/contact">Contact</a></li>
        <?php if (isset($_SESSION['user_id'])) :
            if ($_SESSION['user_id'] != 5) : ?>
                <li><a href="<?php echo URLROOT; ?>/products/inventory/<?php echo $_SESSION['user_id']; ?>/all">My inventory</a></li>
                <li><a href="<?php echo URLROOT; ?>/products/add_product">Add item</a></li>
                <li><a href="<?php echo URLROOT; ?>/users/my_account/<?php echo $_SESSION['user_id']; ?>">My account</a></li>
                <li><a href="<?php echo URLROOT; ?>/users/logout">Log Out</a></li>
            <?php else : ?>
                <li><a href="<?php echo URLROOT; ?>/users/manage">Manage Accounts</a></li>
                <li><a href="<?php echo URLROOT; ?>/users/logout">Log Out</a></li>
            <?php endif;
        else : ?>
            <a href="<?php echo URLROOT; ?>/users/login">Log In</a></li>
        <?php endif; ?>
    </ul>
</nav>
<?php if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_id'] != 5) { ?>
        <a href="<?php echo URLROOT; ?>/carts/show">
            <img src="<?php echo URLROOT ?>/public/img/shopping-cart.png" width="30px" height="30px">
            <!-- <span>0</span> -->
        </a>
<?php }
} ?>
<img alt="" src="<?php echo URLROOT ?>/public/img/menu-icon.png" class="menu-icon" onclick="menutoggle()">