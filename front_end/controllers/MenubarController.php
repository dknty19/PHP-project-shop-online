<?php

try {
    //goi bien $categoryDao ke thua tu CategoryDao
    $productDao = new \com\loabten\model\data\ProductDao(com\loabten\model\data\DatabaseUtils::connect());
    // neu action = add
    if ($action == 'id=2') {
        $id_category = 2;
        $aothunnam= $productDao->findByCategory($id_category);
        
        include './views/products/aothun.php';
    } 
    elseif ($action == 'id=7') {
        $id_category = 7;
        $jeantaynam= $productDao->findByCategory($id_category);
        
        include './views/products/jeantaynam.php';
    } 
    elseif ($action == 'id=5') {
        $id_category = 5;
        $aokhoacnam= $productDao->findByCategory($id_category);
        
        include './views/products/aokhoacnam.php';
    } 
    elseif ($action == 'id=8') {
        $id_category = 8;
        $aosomi= $productDao->findByCategory($id_category);
        
        include './views/products/aosomi.php';
    } 
    // neu action = add_save
  
} catch (Exception $exc) {
    $error = $exc->getMessage();
}

