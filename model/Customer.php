<?php
namespace com\loabten\model;

class Customer {

    private $id_customer;
    private $username;
    private $name_customer;
    private $password;
    private $gender;
    private $address;
    private $email;
    private $phone;
    private $birthday;
            

    function __construct( $id_customer=0,$username = null, $name_customer = null, $password = null, $gender = 0, $address = null, $email = null, $phone = 0,$birthday=0) {
        $this->id_customer = $id_customer;
        $this->username = $username;
        $this->name_customer = $name_customer;
        $this->password = $password;
        $this->gender = $gender;
        $this->address = $address;
        $this->email = $email;
        $this->phone = $phone;
        $this->birthday = $birthday;
    }

    function getid_customer() {
        return $this->id_customer;
    }

    function getusername() {
        return $this->username;
    }

    function getname_customer() {
        return $this->name_customer;
    }

    function getpassword() {
        return $this->password;
    }

    function getgender() {
        return $this->gender;
    }

    function getaddress() {
        return $this->address;
    }

    function getemail() {
        return $this->email;
    }

    function getphone() {
        return $this->phone;
    }
     function getbirthday() {
        return $this->birthday;
    }
    
    
    
    
//    
   function setid_customer($id_customer) {
       $this->id_customer = $id_customer;
    }
    function setname_customer($name_customer){
        $this->name_customer = $name_customer;
    }
            function setusername($username) {
        $this->username = $username;
    }

    function setpassword($password) {
        $this->password = $password;
    }

    function setgender($gender) {
        $this->gender = $gender;
    }

    function setaddress($address) {
        $this->address = $address;
    }

    function setemail($email) {
        $this->email = $email;
    }

    function setphone($phone) {
        $this->phone = $phone;
    }
    
    function setbirthday($birthday) {
        $this->birthday = $birthday;
    }
}
