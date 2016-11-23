<?php

try {
    
    $connection = com\loabten\model\data\DatabaseUtils::connect();
    // lay bien productDao ke thua tu function ProductDao 
    $productDao = new com\loabten\model\data\ProductDao($connection);
    if ($action == 'detail') {
        include './views/order/detail.php';
        //action = add
    }elseif ($action == 'add') {
        $products = $productDao->findSortedAll(' name_product asc ');
        include './views/order/add.php';
    }
    //action = add_save
    elseif ($action == 'add_save') {
        $quantity = $_POST['quantity '];
        $total = $_POST['total'];
        $id_customer = $_POST['id_customer'];       
        $id_product = $_POST['id_product'];
        $name_customer = $_POST['name_customer'];
       
        $order = new com\loabten\model\Order();
        $order->setquantity($quantity);
        $order->settotal($total);
        $order->setid_customer($id_customer);
        $order->setid_product($id_product);
        $order->setname_customer($name_customer);
        

        $result = $OrderDao->insert($order);

        $msg = "$result order has been inserted";
        include './views/order/add.php';
    } elseif ($action == 'delete') {
        $id_order = $_GET['id_order'];
        
        $result = $OrderDao->delete($id_order);
        $alert_message = 'The user has been deleted!!';
        header("Location: index.php");
    } elseif ($action == 'edit') {
        $id_order = $_GET['id_order'];
        $row = $OrderDao->findById($id_order);

        $msg = "";
        include './views/order/edit.php';
    } elseif ($action == 'edit_save') {
        $quantity = $_POST['quantity '];
        $total = $_POST['total'];
        $id_customer = $_POST['id_customer'];
        $id_product = $_POST['id_product'];
        $name_customer = $_POST['name_customer'];

        $order = new com\loabten\model\Order();
        $order->setquantity($quantity);
        $order->settotal($total);
        $order->setid_customer($id_customer);
        $order->setid_product($id_product);
        $order->setname_customer($name_customer);
        

        $OrderDao->update($order);

        header("Location: index.php");
    } elseif ($action == 'find') {
        $result = NULL;
        if (isset($_POST['id_order'])) {
            $name = $_POST['id_order'];
            $result = $OrderDao->findById($id_order);
            if (empty($result)) {
                $msg = "There aren't any orders";
            }
        } else {
            $result = $OrderDao->findAll();
        }
        include './views/order/find.php';
    } else { //(action == 'list')
        $result = $OrderDao->findAll();
        include './views/order/list.php';
    }
} catch (Exception $exc) {
    $error = $exc->getMessage();
}