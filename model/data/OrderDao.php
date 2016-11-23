<?php

namespace com\loabten\model\data;

class OrderDao {

    private $db;

    function __construct($db) {
        $this->db = $db;
    }

    /**
     * Insert new category
     * @param type $order
     * @return type
     */
    function insert($order) {
        $sql = "INSERT INTO `order` (`id_order`, `quantity`,`total`,`id_customer`,`id_product`) VALUES (:id_order, :quantity,:total,:id_customer,:id_product)";
        $command = $this->db->prepare($sql);

        $args = array(
            'id_order' => $order->getid_order(),
            'quantity' => $order->getquantity(),
            'total' => $order->gettotal(),
            'id_customer' => $order->getid_customer(),
            'id_product' => $order->getid_product()
        );

        $result = $command->execute($args);
        return $result;
    }

    function update($order) {
        $sql = "UPDATE `order` SET `id_order` = :id_order,`quantity`=:quantity,"
                . "`total`=:total,`id_customer`=:id_customer,`id_product`=:id_product "
                . "WHERE `id_order` = :id_order";
        $command = $this->db->prepare($sql);

        $args = array(
            'id_order' => $order->getid_order(),
            'quantity' => $order->getquantity(),
            'total' => $order->gettotal(),
            'id_customer' => $order->getid_customer(),
            'id_product' => $order->getid_product()
        );

        $result = $command->execute($args);
        return $result;
    }

    function findById($id_order) {
        $sql = "select * from order where id_order=?";
        $command = $command = $this->db->prepare($sql);
        $command->bindValue(1, $id_order);
        $command->execute();
        $result = $command->fetch();
        $command->closeCursor();
        return $result;
    }

    function delete($order_id) {
        $sql = "delete from category where category_id =?";
        $command = $this->db->prepare($sql);
        $command->bindValue(1, $order_id);
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
        $sql = "select * from order order by $sorted_fields";
        $command = $this->db->prepare($sql);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }

}
