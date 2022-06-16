<div class="col4">
    <a href="<?php echo URLROOT; ?>/products/product_details/<?php echo $product->id; ?>">
        <img alt="" src="<?php echo URLROOT; ?>/img/<?php echo $product->img; ?>_0.jpg">
    </a>
    <h4><?php echo $product->title; ?></h4>
    <div class="rating">
        <?php if (round($product->rating) == 5) { ?>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
        <?php } else if (round($product->rating) == 4) { ?>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
        <?php } else if (round($product->rating) == 3) { ?>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        <?php } else if (round($product->rating) == 2) { ?>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        <?php } else if (round($product->rating) == 1) { ?>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        <?php } else { ?>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        <?php } ?>
    </div>
    <?php if ($product->for_sale)  echo "<p>$ {$product->price}</p>" ?>
    <form action="<?php echo URLROOT; ?>/products/deleteProduct/<?php echo $product->id ?>" method="DELETE">
        <button style=background-color:orange type="submit">Delete Item</button>
    </form>
    <form action="<?php echo URLROOT; ?>/products/editProduct/<?php echo $product->id ?>" method="PATCH">
        <button style=background-color:orange type="submit">Edit Item</button>
    </form>

</div>