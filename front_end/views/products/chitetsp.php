
<?php require'common/header.php'; ?>
<?php require 'common/menubar.php'?>
    
<div class="container">
    <div class="row">
        <div class="col-md-3"><h2 class="title text-center">Chi tiết sản phẩm</h2>
        <div class="col-md-3">
        <table class="table"
               <tbody>
                <tr>
                    <td style="width:50%">
                        <img src="../<?= $row['hinh_product'] ?>">
                    </td>
                    <td>
                        <abbr title="name"><strong>Name:</strong></abbr> 
                        <span class="label label-info"><?= $row['name_product'] ?></span>  <br>
                        <abbr title="price"><strong>Quantity:</strong></abbr> 
                        <span class="label label-info"><?= $row['price'] ?></span>  <br>
                        <abbr title="description"><strong>Unit Price:</strong></abbr> 
                        <span class="label label-info"><?= $row['description'] ?></span>  <br>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
        </div>
    </div>
       
       