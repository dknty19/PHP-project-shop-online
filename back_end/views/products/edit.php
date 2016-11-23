<?php
require_once 'common/header.php';
?>
<!-- Dashboard Wrapper starts -->
<div class="dashboard-wrapper"> 

    <!-- Top Bar starts -->
    <div class="top-bar">
        <div class="page-title"> Edit Product</div>
    </div>
    <!-- Top Bar ends --> 

    <!-- Main Container starts -->
    <div class="main-container"> 

        <!-- Container fluid Starts -->
        <div class="container-fluid"> 

            <!-- Spacer starts -->
            <div class="spacer"> 
                <?php include 'common/message_panel.php'; ?>
                <?php include 'common/error_panel.php'; ?>
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="blog">
                            <div class="blog-body">
                                <form id="defaultForm" method="post" action="index.php" 
                                      class="form-horizontal"  enctype="multipart/form-data">
                                    <input type="hidden" name="action" value="product_edit_save">
                                    
                                    <input type="hidden" name="id_product" value="<?= $row['id_product']?>">
                                    <fieldset>
                                        <legend>Product Information</legend>
                                         <div class="form-group">
                                            <label class="col-lg-3 control-label">Name</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="name_product" value="<?= $row['name_product']?>"  />
                                            </div>
                                        </div>
                                        
                                  
                                        
                                       
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label"> Date Add</label>
                                            <div class="col-lg-9">
                                                <input type="date" class="form-control" name="day_added" value="<?= $row['day_added']?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Is Featured</label>
                                            <div class="col-lg-9">
                                                <input type="checkbox" class="checkbox-inline" name="is_featured" value="1"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Image</label>
                                            <div class="col-lg-9">
                                                <input type="file" class="form-control" name="fileToUpload"/>
                                            </div>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Category</label>
                                            <div class="col-lg-9">
                                                <select name="id_category" class="form-control">
                                                    <?php 
                                                    foreach ($categories as $crow):                                                        
                                                    ?>
                                                    <option value="<?= $crow['id_category']?>"
                                                            <?= $row['id_category'] == $crow['id_category']?'selected':''?>>
                                                        <?= $crow['name_category']?>
                                                    </option>
                                                    <?php 
                                                    endforeach;
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Quantity</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="quantity" 
                                                        value="<?= $row['quantity']?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Unit Price</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="price" 
                                                        value="<?= $row['price']?>"/>
                                            </div>
                                        </div>
                                     
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Image</label>
                                            <div class="col-lg-9">
                                                <input type="file" class="form-control" name="fileToUpload"/>
                                            </div>

                                            <?php if (!empty($row['hinh_product'])): ?>
                                                <input type="hidden" name="old_image" value="<?= $row['hinh_product'] ?>"/>
                                                <div class="col-lg-12">
                                                    <img src="..<?= $row['hinh_product'] ?>" width="50" height="50">
                                                </div>
                                            <?php else: ?> 
                                                &nbsp;
                                            <?php endif ?>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Status</label>
                                            <div class="col-lg-9">
                                                <select name="status" class="form-control">
                                                    <option value="New" <?= $row['status'] == 'New'?'selected':''?>>New</option>
                                                    <option value="Out" <?= $row['status'] == 'Out'?'selected':''?>>Out of Stock</option>
                                                    <option value="OutOrder" <?= $row['status'] == 'OutOrder'?'selected':''?>>Out of Order</option>
                                                    <option value="Delete" <?= $row['status'] == 'Delete'?'selected':''?>>Deleted</option>
                                                    <option value="Sale" <?= $row['status'] == 'Sale'?'selected':''?>>Sale</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Description</label>
                                            <div class="col-lg-9">
                                                <textarea name="description" class="form-control" rows="5"> <?=empty($row['description']) ?$row['description']:''?></textarea>
                                            </div>
                                        </div>
                                    </fieldset>


                                    <div class="form-group">
                                        <div class="col-lg-6 col-lg-offset-6">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row Ends --> 

        </div>
        <!-- Spacer ends --> 

    </div>
    <!-- Container fluid ends -->

</div>
<!-- Main Container ends --> 


<!-- Footer starts -->
<footer> Copyright Everest Admin Panel 2014. </footer>
<!-- Footer ends --> 
<!-- Footer ends -->

</div>
<!-- Dashboard Wrapper ends --> 

<?php
require_once 'common/footer.php';
?>