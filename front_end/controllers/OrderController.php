<?php

try {
    //goi bien $categoryDao ke thua tu CategoryDao
    $productDao = new \com\loabten\model\data\ProductDao(com\loabten\model\data\DatabaseUtils::connect());
    // neu action = adds
    if ($action == 'add_cart') {
        $id_product1 = $_GET['id_product'];
        $row= $productDao->findById1($id_product1);
        
        include './views/order/Order.php';
    }
   elseif ($action=='giohang') {
        
        $row= $productDao->findById1($id_product1);
        
}
  elseif ($action=='save') {
    if(isset($_SESSION['cart'][$_POST['id_product']])){
    
    $_SESSION['cart'][$_POST['id_product']]['quantityorder']+=$_POST['quantityorder'];
    
    }
 else {
        $_SESSION['cart'][$_POST['id_product']]['quantityorder']=$_POST['quantityorder'];
    }
    $_SESSION['cart'][$_POST['id_product']]['name_product']=$_POST['name_product'];
    $_SESSION['cart'][$_POST['id_product']]['hinh_product']=$_POST['hinh_product'];
    include './views/order/Cart.php';
    
}
    // neu action = add_save
  
} catch (Exception $exc) {
    $error = $exc->getMessage();
}

