<?php

namespace com\loabten\model;

class Product {

    private $id_product;
    private $name_product;
    private $description;
    private $price;
    private $quantity;
    private $status;
    private $hinh_product;
    private $day_added;
    private $id_category;
    private $is_featured;
    private $name_category;

    public function __construct($id_product = 0, $name_product = NULL,$description=NULL,$price=0,$quantity=0,$status=NULL,$hinh_product=NULL,$day_add=NULL,$id_category=0,$is_featured=null,$name_category=null) {
        $this->id_product = $id_product;
        $this->name_product = $name_product;
        $this->quantity = $quantity;
        $this->description=$description;
        $this->hinh_product=$hinh_product;
        $this->price=$price;
        $this->status = $status;
        $this->id_category = $id_category;
        $this->day_added = $day_add;
        $this->is_featured = $is_featured;
        $this->name_category = $name_category;
        
        
    }
    public function getId_product() {
        return $this->id_product;
    }

    public function getName_product() {
        return $this->name_product;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getHinh_product() {
        return $this->hinh_product;
    }

    public function getDay_added() {
        return $this->day_added;
    }

    public function getId_category() {
        return $this->id_category;
    }
    public function getIs_featured(){
        return $this->is_featured;
    }

    public function setId_product($id_product) {
        $this->id_product = $id_product;
    }

    public function setName_product($name_product) {
        $this->name_product = $name_product;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setHinh_product($hinh_product) {
        $this->hinh_product = $hinh_product;
    }

    public function setDay_added($day_added) {
        $this->day_added = $day_added;
    }

    public function setId_category($id_category) {
        $this->id_category = $id_category;
    }
    public function setIs_featured($is_featured){
        $this->is_featured=$is_featured;
    }
    public function getName_category() {
        return $this->name_category;
    }

    public function setName_category($name_category) {
        $this->name_category = $name_category;
    }



}

