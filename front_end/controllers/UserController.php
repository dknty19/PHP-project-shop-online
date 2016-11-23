<?php

try {
    //goi bien $categoryDao ke thua tu CategoryDao
    $userDao = new \com\loabten\model\data\CustomerDao(com\loabten\model\data\DatabaseUtils::connect());
    // neu action = add
    if ($action == 'login') {
        
        $jeantaynam= $productDao->findByCategory();
        
        require './common/login.php';
    } 
    // neu action = add_save
  
} catch (Exception $exc) {
    $error = $exc->getMessage();
}

