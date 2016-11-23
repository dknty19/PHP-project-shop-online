<?php require'common/header.php'; ?>
<div class="features_items"><!-- new_items-->
    <h2 class="title text-center">Áo Thun Nam</h2>
    <?php 
    if (isset($aothunnam)):
        foreach ($aothunnam as $row):    
    ?>
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <?php if (empty($row['hinh_product'])): ?>
                        <img src="../<?=$row['hinh_product']?>" alt=""style="width: 260px;height: 260px" />
                    <?php else: ?>
                        <img src="../<?=$row['hinh_product']?>" alt="" style="width: 260px;height: 260px"/>
                    <?php endif; ?> 
                    <h2>$<?= $row['price'] ?></h2>
                    <p><?= $row['name_product'] ?></p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
<!--                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>$56</h2>
                        <p><?= $row['name'] ?></p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>-->
                <?php if ($row['status']=='New'): ?>
                <img src="common/images/home/new.png" class="new" alt="">
                <?php elseif ($row['status']=='Sale'): ?>
                <img src="common/images/home/sale.png" class="new" alt="">
                <?php endif; ?>
            </div>
            
        </div>
    </div>
    <?php
        endforeach;
    endif;
    ?>
</div><!--new_items-->
<?php require 'common/footer.php'; ?>