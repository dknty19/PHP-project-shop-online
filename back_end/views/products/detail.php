<?php
require_once 'common/header.php';
?>
<!-- Dashboard Wrapper starts -->
<div class="dashboard-wrapper"> 

    <!-- Top Bar starts -->
    <div class="top-bar">
        <div class="page-title"> Details of the Product</div>
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
                    <div class="col-md-12 col-sm-12 col-sx-12">
                        <div class="panel no-margin">
                            <div class="panel-heading">
                                <h4 class="panel-title">Product ID: <span class="text-danger"><?= $row['id_product']?></span>
                                </h4>
<!--                                <i class="custom-text">Produced Date - <small class="text-success"></small></i>-->
                            </div>
                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td style="width:50%">
                                                    <abbr title="quantity"><strong>Category:</strong></abbr> 
                                                    <span class="label label-info"><?= $crow['name_category']?></span>  <br>
                                                    <abbr title="quantity"><strong>Name:</strong></abbr> 
                                                    <span class="label label-info"><?= $row['name_product']?></span>  <br>
                                                    <abbr title="quantity"><strong>Quantity:</strong></abbr> 
                                                    <span class="label label-info"><?= $row['quantity']?></span>  <br>
                                                    <abbr title="quantity"><strong>Unit Price:</strong></abbr> 
                                                    <span class="label label-info"><?= $row['price']?></span>  <br>
                                                </td>
                                                <td style="width:50%" class="left-align-text">
                                                   
                                                    <abbr title="quantity"><strong>Added Date:</strong></abbr> 
                                                    <span class="label label-info"><?= $row['day_added']?></span>  <br>
                                                    <abbr title="quantity"><strong>Status:</strong></abbr> 
                                                    <span class="label label-info"><?= $row['status']?></span>  <br>
                                                    <abbr title="quantity"><strong>Is Featured:</strong></abbr> 
                                                    <span class="label label-info"><?= $row['is_featured']?></span>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:100%" colspan="2">
                                                    <h5><abbr title="description">Description</abbr></h5><br>
                                                    <p class="info">
                                                        <?= $row['description']?>
                                                    </p>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:100%" colspan="2">
                                                    <img src="<?= $row['hinh_product']?>" height="80" width="70">
                                                   
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <hr class="less-margin">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-sx-12">
                                        <div class="pull-right">
                                            <a href="index.php?action=product_edit&id_product=<?= $row['id_product']?>" type="button" class="btn btn-warning">
                                                <i class="fa fa-edit"></i> 
                                                <span class="hidden-xs">Edit</span>
                                            </a>
                                            <a href="#" type="button" class="btn btn-danger"
                                               onclick="confirmDelete('index.php?action=product_delete?id_product=<?= $row['id_product']?>', 'product');">
                                                <i class="fa fa-trash-o"></i> 
                                                <span class="hidden-xs">Delete</span>
                                            </a>
                                        </div>
                                    </div>
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