<?php

namespace com\loabten\model\data;

class ProductDao {

    private $db;

    function __construct($db) {
        $this->db = $db;
    }

    function insert($product) {
        $sql = "INSERT INTO `product` (`id_product`,`name_product`,`quantity`,`price`,"
                . " `description`,`status`, `hinh_product`,`day_added`,`is_featured`,`id_category`,`name_category`)"
                . " VALUES(?,?,?,?,?,?,?,?,?,?,?)";
        $command = $this->db->prepare($sql);

        $command->bindValue(1,$product->getid_product());
        $command->bindValue(2,$product->getname_product());
        $command->bindValue(3,$product->getquantity());
        $command->bindValue(4,$product->getprice());
        $command->bindValue(5,$product->getdescription());
        $command->bindValue(6,$product->getstatus());
        $command->bindValue(7,$product->gethinh_product());
        $command->bindValue(8,$product->getday_added());
        $command->bindValue(9,$product->getis_featured());
        $command->bindValue(10,$product->getid_category());
        $command->bindValue(11,$product->getname_category());
        
//        $product->getname_product();
//        $product->getquantity();
//        $product->getprice();
//        $product->getdescription();
//        $product->getstatus();
//        $product->gethinh_product();
//        $product->getday_added();
//        $product->getis_featured();
//        $product->getid_category();


        $result = $command->execute();
        return $result;
    }

    function update($product) {
        $sql = "UPDATE `product` "
                . " SET `id_product` = :id_product,`name_product` = :name_product,`quantity` = :quantity,"
                . " `price` = :price,"
                . " `description` = :description,`status` = :status, hinh_product = :hinh_product, "
                . " is_featured=:is_featured, id_category=:id_category "
                . " WHERE `product_id` = :product_id";
        $command = $this->db->prepare($sql);

        $args = array(
            'id_product' => $product->getid_product(),
            'name_product' => $product->getname_product(),
            'quantity' => $product->getquantity(),
            'price' => $product->getprice(),
            'description' => $product->getdescription(),
            'status' => $product->getstatus(),
            'hinh_product' => $product->gethinh_product(),
            'day_added' => $product->getday_added(),
            'is_featured' => $product->getis_featured(),
            'id_category' => $product->getid_category()
        );

        $result = $command->execute($args);
        return $result;
    }

    function findById($product_id) {
        $sql = "select * from product where id_product=?";
        $command = $command = $this->db->prepare($sql);
        $command->bindValue(1, $product_id);
        $command->execute();
        $result = $command->fetch();
        $command->closeCursor();
        return $result;
    }
    function findById1($id_product) {
        $sql = "select * from product where id_product=?";
        $command = $command = $this->db->prepare($sql);
        $command->bindValue(1, $id_product);
        $command->execute();
        $result = $command->fetch();
        $command->closeCursor();
        return $result;
    }
//    function findByIdCategory($id_category) {
//        $sql = "select * from product where id_category=?";
//        $command = $command = $this->db->prepare($sql);
//        $command->bindValue(1, $id_category);
//        $command->execute();
//        $result = $command->fetch();
//        $command->closeCursor();
//        return $result;
//    }
    

    function findByName($name) {
        $sql = "select * from product where name like ?";
        $command = $this->db->prepare($sql);
        $command->bindValue(1, '%' . $name . '%');
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }
//    function findByCategory($id_category) {
//        $sql = "select * from product where id_category=?";
//        $command = $this->db->prepare($sql);
//        $command->execute();
//        $result = $command->fetchAll();
//        $command->closeCursor();
//        return $result;
//    }
     function findByCategory($id_category) {
        $sql = "select * from product where id_category=$id_category";
        $command = $this->db->prepare($sql);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }
    function delete($product_id) {
        $sql = "delete from product where id_product =?";
        $command = $this->db->prepare($sql);
        $command->bindValue(1, $product_id);
        $result = $command->execute();
        return $result;
    }

    function findAll() {
        $sql = "select * from product";
        $command = $this->db->prepare($sql);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
        
    }

    /**
     * Find the list of featured products. It is used to display in the front-end home page.
     * @param type $count
     * @return type
     */
    function findFeaturedProducts($count) {
        $sql = "select * from product where is_featured=1 order by day_added limit $count";
        $command = $this->db->prepare($sql);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }

    function findNewProducts($count) {
        $sql = "select * from product where status = 'new' order by day_added desc limit $count";
        $command = $this->db->prepare($sql);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }
       function findSortedAll($sorted_fields) {
        $sql = "select * from product order by $sorted_fields";
        $command = $this->db->prepare($sql);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }

}
