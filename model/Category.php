<?php

namespace com\loabten\model;

class Category{
    private $id_category;
    private $name_category;
    
    function __construct($id_category=0, $name_category=null) {
        $this->id_category = $id_category;
        $this->name_category = $name_category;
    }
    public function getId_category() {
        return $this->id_category;
    }

    public function getName_category() {
        return $this->name_category;
    }

    public function setId_category($id_category) {
        $this->id_category = $id_category;
    }

    public function setName_category($name_category) {
        $this->name_category = $name_category;
    }


}