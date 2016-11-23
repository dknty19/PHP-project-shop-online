<?php

namespace com\loabten\model\data;

class CustomerDao {

    private $db;

    function __construct($db) {
        $this->db = $db;
    }

    /**
     * Insert new category
     * @param type $customer
     * @return type
     */
    function insert($customer) {
        $sql = "INSERT INTO `customer` (`username`,`password`"
                . ",`name_customer`,`birthday`,`gender`,`address`,`phone`,`email`) "
                . "VALUES (?,?,?,?,?,?,?,?)";
        $command = $this->db->prepare($sql);


        $command->bindValue(1, $customer->getusername());
        $command->bindValue(2, $customer->getpassword());
        $command->bindValue(3, $customer->getname_customer());
        $command->bindValue(4, $customer->getbirthday());
        $command->bindValue(5, $customer->getgender());
        $command->bindValue(6, $customer->getaddress());
        $command->bindValue(7, $customer->getphone());
        $command->bindValue(8, $customer->getemail());
       
        $result = $command->execute();
        return $result;
    }

    function update($customer) {
        $sql = "UPDATE `aoquan_db`.`customer` SET `username` = ?,`name_customer` = ?,`password` = ?,`gender` = ?,"
                . " `address` = ?,`email` = ?,`phone` = ?,birthday = ? WHERE `id_customer` = ?;";
        $command = $this->db->prepare($sql);
        //  $command->bindValue(1, $customer->getid_customer());
        $command->bindValue(1, $customer->getusername());
        $command->bindValue(2, $customer->getname_customer());
        $command->bindValue(3, $customer->getpassword());
        $command->bindValue(4, $customer->getgender());
        $command->bindValue(5, $customer->getaddress());
        $command->bindValue(6, $customer->getemail());
        $command->bindValue(7, $customer->getphone());
        $command->bindValue(8, $customer->getbirthday());
        $command->bindValue(9, $customer->getid_customer());
        $result = $command->execute();
        return $result;
    }

    function checkLogin($username, $password) {
        $sql = "select * from customer where username=? and password = ?";
        $command = $command = $this->db->prepare($sql);
        $command->bindValue(1, $username);
        $command->bindValue(2, $password);
        $command->execute();
        $result = $command->fetch();
        $command->closeCursor();
        return !empty($result);
    }

    function findById($id_customer) {
        $sql = "select * from customer where id_customer=?";
        $command = $command = $this->db->prepare($sql);
        $command->bindValue(1, $id_customer);
        $command->execute();
        $result = $command->fetch();
        $command->closeCursor();
        return $result;
    }

    function findByName($username) {
        $sql = "select * from customer where username like ?";
        $command = $this->db->prepare($sql);
        $command->bindValue(1, '%' . $username . '%');
        $command->execute();
        $result = $command->fetch();
        $command->closeCursor();
        return $result;
    }

    function delete($id_customer) {
        $sql = "delete from customer where id_customer =?";
        $command = $this->db->prepare($sql);
        $command->bindValue(1, $id_customer);
        $result = $command->execute();
        return $result;
    }

    function findAll() {
        $sql = "select * from customer";
        $command = $this->db->prepare($sql);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }

}
