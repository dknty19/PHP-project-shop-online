<?php
require '../models/data/DatabaseUtils.php';
require '../models/data/ProductDao.php';
require '../models/data/CustomerDao.php';
require '../models/Customer.php';
require '../models/Product.php';
require '../Utilities/UploadFileHelper.php';
require '../models/Category.php';
require '../models/data/CategoryDao.php';
require '../models/Order.php';
require '../models/data/OrderDao.php';

$action = "list";

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
}

if ($action == 'login'){
    include './views/security/login.php';
}elseif ($action == 'login_check'){
    $userDao = new com\loabten\model\data\UserDao(com\loabten\model\data\DatabaseUtils::connect());
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($userDao->checkLogin($username, $password)){
        session_start();
        $_SESSION['username']= $username;
        header('Location: index.php');
    }else{
        $msg = "Invalid username or password";
        include './views/security/login.php';
    }
}else{

    include '../Utilities/Security.php';

    if (strpos($action, 'user')!== false){
        $action = substr($action, 5);
        $type = 'user';

        include './controllers/UserController.php';
    }elseif (strpos($action, 'category') !== false) {
        $action = substr($action, 9);
        $type = 'category';

        include './controllers/CategoryController.php';
    }elseif (strpos($action, 'product') !== false) {
        $action = substr($action, 8);
        $type = 'product';

        include './controllers/ProductController.php';
    }
    elseif (strpos($action, 'order') !== false) {
        $action = substr($action, 6);
        $type = 'order';

        include './controllers/OrderController.php';
    }else{
        $type='dashboard';
        include './views/dashboard/home.php';
    }
}