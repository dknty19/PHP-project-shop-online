<?php

namespace com\loabten\model\data;

class CategoryDao{
    private $db;

    function __construct($db) {
        $this->db = $db;
    }
    /**
     * Insert new category
     * @param type $category
     * @return type
     */
    function insert($category) {
        $sql = "INSERT INTO `category` (`id_category`, `name_category`) VALUES (:id_category, :name_category)";
        $command = $this->db->prepare($sql);

        $args = array(
            'id_category'=>$category->getId_category(),
            'name_category' => $category->getName_category()
        );

        $result = $command->execute($args);
        return $result;
    }
    function update($category) {
        $sql = "UPDATE `category` SET `name_category` = :name_category WHERE `id_category` = :id_category";
        $command = $this->db->prepare($sql);

        $args = array(
            'id_category'=>$category->getId_category(),
            'name_category' => $category->getName_category()
        );

        $result = $command->execute($args);
        return $result;
    }
    function findById($id_category) {
        $sql = "select * from category where id_category=?";
        $command = $command = $this->db->prepare($sql);
        $command->bindValue(1, $id_category);
       // $command->bindValue(2, $name_category);
        $command->execute();
        $result = $command->fetch();
        $command->closeCursor();
        return $result;
    }
    function findById1($id_category) {
        $sql = "select * from category where id_category=?";
        $command = $command = $this->db->prepare($sql);
        $command->bindValue(1, $id_category);
       // $command->bindValue(2, $name_category);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }

    function findByName($name_category) {
        $sql = "select * from category where name_category like ?";
        $command = $this->db->prepare($sql);
        $command->bindValue(1, '%' . $name_category . '%');
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }

    function delete($id_category) {
        $sql = "delete from category where id_category =?";
        $command = $this->db->prepare($sql);
        $command->bindValue(1, $id_category);
        $result = $command->execute();
        return $result;
    }
    function findAll() {
        $sql = "select * from category";
        $command = $this->db->prepare($sql);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }
    function findSortedAll($sorted_fields) {
        $sql = "select * from category order by $sorted_fields";
        $command = $this->db->prepare($sql);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }
}