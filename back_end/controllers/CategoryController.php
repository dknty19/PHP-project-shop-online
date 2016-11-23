<?php

try {
    //goi bien $categoryDao ke thua tu CategoryDao
    $categoryDao = new \com\loabten\model\data\CategoryDao(com\loabten\model\data\DatabaseUtils::connect());
    // neu action = add
    if ($action == 'add') {
        include './views/categories/add.php';
    } 
    // neu action = add_save
    elseif ($action == 'add_save') {
        $name_category = $_POST['name'];
        $category = new com\loabten\model\Category();
        $category->setName_category($name_category);

        $result = $categoryDao->insert($category);

        $msg = "$result category has been inserted";
        include './views/categories/add.php';
    }
    // neu action = delete
    elseif ($action == 'delete') {
        $id_category = $_GET['id_category'];
        $result = $categoryDao->delete($id_category);

        header("Location: index.php");
        
    }
    // neu action = edit
    elseif ($action == 'edit') {
        $id_category = $_GET['id_category'];
        $result = $categoryDao->findById1($id_category);
        
        include './views/categories/edit.php';
    } 
    // neu action = edit_save
    elseif ($action == 'edit_save') {
        $id_category = $_POST['id_category'];
        $name_category = $_POST['name_category'];

        $user = new com\loabten\model\Category();
        $user->setId_category($id_category);
        $user->setName_category($name_category);

        $categoryDao->update($user);
        $msg = 'The category has been updated!';
        $result = $categoryDao->findAll();
        include './views/categories/list.php';
        //header("Location: index.php");
    } 
    // neu action = find
    elseif ($action == 'find') {
        $result = NULL;
        if (isset($_POST['name_category'])) {
            $name_category = $_POST['name_category'];
            $result = $categoryDao->findByName($name_category);
            if (empty($result)) {
                $msg = "There aren't any categories";
            }
        } else {
            $result = $categoryDao->findAll();
        }
        include './views/categories/find.php';
    } else { //(action == 'list')
        $result = $categoryDao->findAll();
        include './views/categories/list.php';
    }
} catch (Exception $exc) {
    $error = $exc->getMessage();
}