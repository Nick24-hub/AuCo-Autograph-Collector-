<div class="logo">
    <a href="<?php echo URLROOT; ?>/pages/index">
        <img alt="" src="<?php echo URLROOT ?>/public/img/autograf-logo.png" width="150" height="150">
    </a>
</div>
<nav>
    <ul id="MenuItems">
        <li><a href="<?php echo URLROOT; ?>/pages/index">Home</a></li>
        <li><a href="<?php echo URLROOT; ?>/gallery">Gallery</a></li>
        <li><a href="<?php echo URLROOT; ?>/contact">Contact</a></li>
        <li><?php if(isset($_SESSION['user_id'])):?>
            <a href='<?php echo URLROOT; ?>/users/logout'>Log Out</a></li>
            <?php else:?>
            <a href='<?php echo URLROOT; ?>/users/login'>Log In</a></li>
            <?php endif;?>
    </ul>
</nav>
<img alt="" src="<?php echo URLROOT ?>/public/img/menu-icon.png" class="menu-icon" onclick="menutoggle()">