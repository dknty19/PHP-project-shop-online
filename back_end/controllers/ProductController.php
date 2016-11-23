    <?php
try {
    $connection = com\loabten\model\data\DatabaseUtils::connect();
    $productDao = new com\loabten\model\data\ProductDao($connection);
    $categoryDao = new \com\loabten\model\data\CategoryDao($connection);
    if ($action == 'detail') {
        $id_product = $_GET['id_product'];
        $row =  $productDao->findById($id_product);
        $crow = $categoryDao->findById($row['id_category']);
        
        include './views/products/detail.php';
    }elseif ($action == 'add') {
        $categories = $categoryDao->findSortedAll(' name_category asc ');
        include './views/products/add.php';
    } elseif ($action == 'add_save') {
        $name_product = $_POST['name_product'];
        $id_category = $_POST['id_category'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $day_added = $_POST['day_added'];
        //$hinh_product = $_POST['hinh_product'];
        
      //  $name_category=$_POST['name_category'];
        $is_featured = 0;
        
        if (isset($_POST['is_featured']))
            $is_featured = $_POST['is_featured'];
        $status = 'New';

        $product = new com\loabten\model\Product();
        
        $product->setname_product($name_product);
        $product->setid_category($id_category);
        $product->setquantity($quantity);
        $product->setprice($price);
        $product->setdescription($description);
        $product->setstatus($status);
        $product->setday_added($day_added);
        $product->setIs_featured($is_featured);
       // $product->setName_category($name_category);
        $hinh_product = NULL;
        if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]['error'] != UPLOAD_ERR_NO_FILE){
            $uploadFiles = UploadFileHelper::processUploadFile();
            $hinh_product = '/uploads/' . $uploadFiles['FileName'];
        }
        $product->sethinh_product($hinh_product);

        $result = $productDao->insert($product);

        $msg = "$result product has been inserted";
        include './views/products/add.php';
    } elseif ($action == 'delete') {
        $id_product = $_GET['id_product'];
        $result = $productDao->delete($id_product);
        //$msg = "The product has been deleted!";
        $alert_message = "The product has been deleted!";
        //header("Location: index.php");
        $result = $productDao->findAll();
        include './views/products/list.php';
    } elseif ($action == 'edit') {
        $id_product = $_GET['id_product'];
        $row = $productDao->findById($id_product);
        $categories = $categoryDao->findSortedAll(' name_category asc ');
        include './views/products/edit.php';
    } elseif ($action == 'edit_save') {
        $id_product = $_POST['id_product'];
        $name_product = $_POST['name_product'];
        $id_category= $_POST['id_category'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $old_image = null;
        if (isset($_POST['old_image']))
            $old_image = $_POST['old_image'];
        $status = $_POST['status'];

        $product = new com\loabten\model\Product();
        $product->setid_product($id_product);
        $product->setname_product($name_product);
        $product->setid_category($id_category);
        $product->setquantity($quantity);
        $product->setprice($price);
        $product->setdescription($description);
        $hinh_product = NULL;
        if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]['error'] != UPLOAD_ERR_NO_FILE){
            $uploadFiles = UploadFileHelper::processUploadFile();
            $hinh_product = '/uploads/' . $uploadFiles['FileName'];
        }else{
            $hinh_product= $old_image;
        }
        $product->setstatus($status);
        $product->sethinh_product($hinh_product);

        $productDao->update($product);

        header("Location: index.php");
    } elseif ($action == 'find') {
        $result = NULL;
        if (isset($_POST['name_product'])) {
            $name_product = $_POST['name_product'];
            $result = $productDao->findByName($name_product);
            if (empty($result)) {
                $msg = "There aren't any products";
            }
        } else {
            $result = $productDao->findAll();
        }
        include './views/products/find.php';
    } else { //(action == 'list')
        $result = $productDao->findAll();
        include './views/products/list.php';
    }
} catch (Exception $exc) {
    $error = $exc->getMessage();
    include 'views/dashboard/error.php';
}