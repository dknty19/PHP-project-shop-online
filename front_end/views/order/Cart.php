<?php include 'common/header.php'; ?>
<?php include 'common/menubar.php' ?>
<div class="col-md-9"><h2 class="title text-center">Xác nhận đặt hàng</h2>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="dt_example" class="table-responsive example_alt_pagination clearfix">
                            <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">
                                <thead>
                                    <tr>
                                        <th style="width:10%">Hình ảnh</th>
                                        <th style="width:10%">Tên sản phẩm</th>
                                        <th style="width:10%">Số lượng</th>
                                        <th style="width:10%">Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($_SESSION['cart'])):
//    var_dump($_SESSION['cart']);
                                        foreach ($_SESSION['cart'] as $k => $v):
                                            //echo $k . '_' . $_SESSION['cart'][$k]['name_product']. $_SESSION['cart'][$k]['hinh_product'].'<br>';
                                            ?>



                                            <tr class="grade<?= $ch ?>">
                                                <td>
                                                    <img src="../<?php echo $_SESSION['cart'][$k]['hinh_product'] ?>" style="width: 50px; height: 50px">
                                                </td>

                                                <td><?php echo $_SESSION['cart'][$k]['name_product'] ?></td>
                                                </td>
                                                <td><?php echo $_SESSION['cart'][$k]['quantityorder'] ?></td>
                                                <td>giá</td>
                                            </tr>


                                            <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </tbody>
                            </table>

                        </div>
                        <form method="POST" action="index.php?action=tienhanhdat">
                            <input type="submit" value=" Tiến Hành Order " >

                        </form>