<?php

    include 'class.product.php';

    class Admin extends User
    {
        function __construct()
        {

        }

        public function getType() 
        {
            return parent::getType();
        } 
        
        public function setType($userType) 
        {
            parent::setType($userType);
        } 

        public function getEmail() 
        {
            return parent::getEmail();
        } 

        public function setEmail($email) 
        {
            $parent::setEmail($email);
        } 

        public function getPassword() 
        {
            return parent::getPassword();
        } 

        public function setPassword($password) 
        {
            parent::setPassword($password);
        } 
    
        public function deleteUser($userEmail)
        {

        }

        public function addProduct()
        {

        }

        public function removeProductName($productName)
        {

        }

        public function removeProduct()
        {

        } 

    }
?>