<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Sản Phẩm Đặc Biệt</h2>
    <?php 
    if (isset($featured_products)):
        foreach ($featured_products as $row):    
    ?>
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <?php if (empty($row['hinh_product'])): ?>
                    
                    <img src="../<?=$row['hinh_product']?>" alt=""  style="width: 260px; height: 260px"/>
                    <?php else: ?>
                        <img src="../<?=$row['hinh_product']?>" alt="" style="width: 260px;height: 260px "/>
                    <?php endif; ?>
                    <h2>$<?= $row['price'] ?></h2>
                    <p><?= $row['name_product'] ?></p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                </div>
<!--                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>$56</h2>
                        <p><?= $row['name_product'] ?></p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>-->
                <?php if ($row['status']=='New'): ?>
                <img src="common/images/home/sale.png" class="new" alt="">
                <?php elseif ($row['status']=='Sale'): ?>
                <img src="common/images/home/sale.png" class="new" alt="">
                <?php endif; ?>
            </div>
<!--            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
            </div>-->
        </div>
    </div>
    <?php
        endforeach;
    endif;
    ?>
</div><!--features_items-->