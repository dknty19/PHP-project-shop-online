<?php include 'common/header.php'; ?>
<?php include 'common/menubar.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-3"><h2 class="title text-center">Đặt hàng</h2>
        <div class="col-md-9">
            <div>
    <form method="post" action="index.php?action=save">
    
        <table style="text-align: center">
                <tr>
                    <td style="width:50px">
                        <img src="../<?= $row['hinh_product'] ?>">
                    </td>
                    <td>
                        <div>
                         <abbr title="name"><strong>Tên</strong></abbr> 
                        </div>
                        <div>
                        <span class="label label-style"><?= $row['name_product'] ?></span>  <br>
                        </div>
                        <div>
                        <abbr title="price"><strong>Giá</strong></abbr> 
                        </div>
                        <span class="label label-style" id="priceProduct"><?= $row['price'] ?></span>  <br>
                        <abbr title="description"><strong>Mô tả</strong></abbr> 
                        <span class="label label-style"><?= $row['description'] ?></span>  <br>
                    </td>
                </tr>
           <tr>
               <td>
                   Số lượng
                   <select id="quantityorder" name="quantityorder" onchange="selectNumProduct() ">
                       <option value="1">
                           1
                       </option>
                       <option value="2">
                           2
                       </option>
                       <option value="3">
                           3
                       </option>
                   </select>
               </td>
           <tr>
               <td>
                   Tổng tiền
               </td>
               <td>
                   <p id="sumproduct"><?= $row['price'] ?> </p> 
               </td>
           </tr>
           <tr>
           
           <td><input type="submit" value="Order" ></td>
           </tr>
       </table>
    <input type="hidden" name="id_product" value="<?=$row['id_product']?>">
    <input type="hidden" name="name_product" value="<?=$row['name_product']?>">
    <input type="hidden" name="hinh_product" value="<?=$row['hinh_product']?>">
    </form>
            </div>
        </div>
        </div>
    </div>
</div>          

<script>
   function  selectNumProduct(){
        var num= parseInt(document.getElementById("quantityorder").value);
        console.log(num);
        var price= parseInt(document.getElementById("priceProduct").innerHTML);
        console.log(document.getElementById("priceProduct").innerHTML);
        var sum = num*price;
        document.getElementById("sumproduct").innerHTML= sum;
    }
</script>