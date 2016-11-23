<?php

try {
    // goi bien userDao ke thua tu CustomerDao
    $userDao = new com\loabten\model\data\CustomerDao(com\loabten\model\data\DatabaseUtils::connect());
    // neu action = detail
    if ($action == 'detail') {
        include './views/customers/detail.php';
        // neu action = add
    } elseif ($action == 'add') {
        include './views/customers/add.php';
        // neu action = add_save
    } elseif ($action == 'add_save') {
        $username = $_POST['username'];
        $name_customer = $_POST['name'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $birthday = $_POST['birthday'];
        //$customer = new com\loabten\model\Customer();
        $customer = new com\loabten\model\Customer();
        $customer->setusername($username);
        $customer->setname_customer($name_customer);
        $customer->setpassword($password);
        $customer->setgender($gender);
        $customer->setaddress($address);
        $customer->setemail($email);
        $customer->setphone($phone);
        $customer->setbirthday($birthday);
        
        $result = $userDao->insert($customer);

        $msg = "$result customer has been inserted";
        include './views/customers/add.php';
    } 
    // neu action = delete
    elseif ($action == 'delete') {
        $id_customer = $_GET['id_customer'];

        $result = $userDao->delete($id_customer);
        $alert_message = 'The user has been deleted!!';
        header("Location: index.php");
    } 
    // neu action = edit
    elseif ($action == 'edit') {
        $id_customer = $_GET['id_customer'];
        $row = $userDao->findById($id_customer);
        
        $msg = "";
        include './views/customers/edit.php';
    } 
    // neu action = edit_save
    elseif ($action == 'edit_save') {
        $id_customer = $_POST['id_customer'];
        $username = $_POST['username'];
        $name_customer = $_POST['name'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $birthday = $_POST['birthday'];

        $customer = new com\loabten\model\Customer();
        $customer->setid_customer($id_customer);
        $customer->setusername($username);
        $customer->setname_customer($name_customer);
        $customer->setpassword($password);
        $customer->setgender($gender);
        $customer->setaddress($address);
        $customer->setemail($email);
        $customer->setphone($phone);
        $customer->setbirthday($birthday);

        $userDao->update($customer);

        header("Location: index.php");
    } 
    // neu action = find
    elseif ($action == 'find') {
        $result = NULL;
        if (isset($_POST['name_customer'])) {
            $name_customer = $_POST['name_customer'];
            $result = $userDao->findByName($name_customer);
            if (empty($result)) {
                $msg = "There aren't any customers";
            }
        } else {
            $result = $userDao->findAll();
        }
        include './views/customers/find.php';
    } else { //(action == 'list')
        $result = $userDao->findAll();
        include './views/customers/list.php';
    }
} catch (Exception $exc) {
    $error = $exc->getMessage();
}