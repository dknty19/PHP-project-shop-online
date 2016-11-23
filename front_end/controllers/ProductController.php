<?php

try {
    //goi bien $categoryDao ke thua tu CategoryDao
    $productDao = new \com\loabten\model\data\ProductDao(com\loabten\model\data\DatabaseUtils::connect());
    // neu action = adds
    if ($type == 'sp') {
        $id_product = $_GET['id_product'];
        $row= $productDao->findById1($id_product);
        
        include './views/products/chitetsp.php';
    } 
    // neu action = add_save
  
} catch (Exception $exc) {
    $error = $exc->getMessage();
}

