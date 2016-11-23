<?php

session_start();
require '../model/data/CustomerDao.php';
require '../model/Customer.php';
require '../model/data/ProductDao.php';
require '../model/Product.php';
require '../model/data/DatabaseUtils.php';

$action = "home";

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
}
$productDao = new com\loabten\model\data\ProductDao(\com\loabten\model\data\DatabaseUtils::connect());



if ($action == 'login') {
    include './common/login.php';
}
// kiem tra dang nhap
elseif ($action == 'login_check') {
    $customerDao = new com\loabten\model\data\CustomerDao(com\loabten\model\data\DatabaseUtils::connect());
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($customerDao->checkLogin($username, $password)) {
        $abc = $customerDao->findByName($username);
//        session_start();
        $_SESSION['username'] = $abc['username'];

        $_SESSION['id_customer'] = $abc['id_customer'];
        $featured_products = $productDao->findFeaturedProducts(6);
        $new_products = $productDao->findNewProducts(6);
        include './views/home.php';
    } else {
        $msg = "Invalid username or password";
        include './common/login_fail.php';
    }
}
//}elseif(){
//
//include './common/session.php';}
//
// elseif (strpos($action, 'jeantaynam_id=2') !== false) {
////        $action = substr($action, 11);
//     $action = 'id=2';
//    
//        include './controllers/MenubarController.php';
//}
elseif (strpos($action, 'aothun_id=2') !== false) {
    $action = substr($action, 7);

    include './controllers/MenubarController.php';
} elseif (strpos($action, 'jeantaynam_id=7') !== false) {
    $action = substr($action, 11);

    include './controllers/MenubarController.php';
} elseif (strpos($action, 'aokhoacnam_id=5') !== false) {
    $action = substr($action, 11);

    include './controllers/MenubarController.php';
} elseif (strpos($action, 'aosomi_id=8') !== false) {
    $action = substr($action, 7);

    include './controllers/MenubarController.php';
//}else ($action == 'home'){
} elseif (strpos($action, 'chitietsp') !== false) {
    $type = substr($action, 7);
    include './controllers/ProductController.php';
} elseif (strpos($action, 'add_cart') !== false) {
    $action = "add_cart";
    include './controllers/OrderController.php';
} elseif (strpos($action, 'giohang') !== false) {
    $action = "giohang";
    include './controllers/OrderController.php';
} elseif (strpos($action, 'save') !== false) {
    $action = "save";
    include './controllers/OrderController.php';
   
}elseif (strpos($action, 'tienhanhdat') !== false) {
    include './views/order/Order_active.php';
   
}
else {
    $featured_products = $productDao->findFeaturedProducts(6);
    $new_products = $productDao->findNewProducts(6);
    //$jeantaynam = $productDao->findByCategory(7);
    include './views/home.php';
}