<?php

namespace com\loabten\model;

class Order {

    private $id_order;
    private $quantity;
    private $total;
    private $id_customer;
    private $id_product;
    private $name_customer;

    function __construct($id_order = 0, $quantity = 0, $total = 0, $id_customer = 0, $id_product = 0,$name_customer=NULL) {
        $this->id_order = $id_order;
        $this->quantity = $quantity;
        $this->total = $total;
        $this->id_customer = $id_customer;
        $this->id_product = $id_product;
        $this->name_customer = $name_customer;
    }

    function getid_order() {
        return $this->id_order;
    }

    function getquantity() {
        return $this->quantity;
    }

    function gettotal() {
        return $this->total;
    }

    function getid_customer() {
        return $this->id_customer;
    }

    function getid_product() {
        return $this->id_product;
    }
    
     function getname_customer() {
        return $this->name_customer_customer;
    }
    

    function setid_order($id_order) {
        $this->id_order = $id_order;
    }

    function setquantity($quantity) {
        $this->quantity = $quantity;
    }

    function settotal($total) {
        $this->total = $total;
    }

    function setid_customer($id_customer) {
        $this->id_customer = $id_customer;
    }

    function setid_product($id_product) {
        $this->id_product = $id_product;
    }
    function setname_customer($name_customer) {
        $this->name_customer = $name_customer;
    }

}
