<?php
    class Customer extends User 
    {
        private $userCard = 0;
        private $userAddress = "";
        private $userCity = "";
        private $userZip = 0;

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
    
        public function getCard() 
        {
            return $this->$userCard;
        } 

        public function setCard($userCard)
        {
            if (is_int($userCard))
            {
                $cardlen = strlen((string)$userCard);
                if ($cardlen >= 14 && $cardlen <= 19)
                {
                    $this->$userCard = $userCard;
                    return true;
                }
            }
            return false;
        } 

        public function getAddress() 
        {
            return (string)$this->$userAddress;
        } 

        public function setAddress($userAddress)
        {
            if (is_string($userAddress))
            {
                $this->$userAddress = $userAddress;
                return true;
            }
            return false;
        } 

        public function getCity() 
        {
            return (string)$this->$userCity;
        } 

        public function setCity($userCity)
        {
            if (is_string($userCity))
            {
                $this->$userCity = $userCity;
                return true;
            }
            return false;
        }

        public function getZip() 
        {
            return (int)$this->$userZip;
        } 

        public function setZip($userZip)
        {
            if (is_int($userZip))
            {
                $ziplen = strlen((string)$userZip);
                if ($ziplen == 5)
                {
                    $this->$userZip = $userZip;
                    return true;
                }
            }
            return false;
        } 

    }
?>