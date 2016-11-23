<?php
require '../model/data/DatabaseUtils.php';
require '../model/data/ProductDao.php';
require '../model/data/CustomerDao.php';
require '../model/Customer.php';
require '../model/Product.php';
require '../Utilities/UploadFileHelper.php';
require '../model/Category.php';
require '../model/data/CategoryDao.php';
require '../model/Order.php';
require '../model/data/OrderDao.php';

$action = "";
//kiem tra action method 
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
}
// neu action = login
if ($action == 'login'){
    include './views/security/login.php';
}
// kiem tra dang nhap
elseif ($action == 'login_check'){
    $customerDao = new com\loabten\model\data\CustomerDao(com\loabten\model\data\DatabaseUtils::connect());
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($customerDao->checkLogin($username, $password)){
        session_start();
        $_SESSION['username']= $username;
        header('Location: index.php');
        
    }else{
        $msg = "Invalid username or password";
        include './views/security/login.php';
    }
}else{

    include '../Utilities/Security.php';
    // loai bo type va lay action 
    if (strpos($action, 'customer')!== false){
        $action = substr($action, 9);
        $type = 'customer';

        include './controllers/CustomerController.php';
    }
     // loai bo type va lay action 
    elseif (strpos($action, 'category') !== false) {
        $action = substr($action, 9);
        $type = 'category';

        include './controllers/CategoryController.php';
    }
     // loai bo type va lay action 
    elseif (strpos($action, 'product') !== false) {
        $action = substr($action, 8);
        $type = 'product';

        include './controllers/ProductController.php';
    }
     // loai bo type va lay action 
    elseif (strpos($action, 'order') !== false) {
        $action = substr($action, 6);
        $type = 'order';

        include './controllers/OrderController.php';
    }else{
        $type='dashboard';
        include './views/dashboard/home.php';
    }
}