<?php
    class User 
    {
        private $userType = 0;
        private $userEmail = "";
        private $userPassword = "";
    
        function __construct()
        {

        }

        public function getType() 
        {
            return (int)$this->$userType;
        } 
        
        public function setType($userType) 
        {
            if (is_int($userType))
            {
                if ($userType == 1 || $userType == 0)
                {
                    $this->$userType = $userType;
                    return true;
                } 
            }
            return false;
        } 

        public function getEmail() 
        {
            return (string)$this->$userEmail;
        } 

        public function setEmail($email) 
        {
            if (is_string($email))
            {
                $emaillen = strlen((string)$email);
                if ($emaillen >= 4)
                {
                    $this->$userEmail = $email;
                    return true;
                } 
            }
            return false;
        } 

        public function getPassword() 
        {
            return (string)$this->$userPassword;
        } 

        public function setPassword($password) 
        {
            if (is_string($password))
            {
                $passlen = strlen((string)$password);
                if ($passlen >= 5)
                {
                    $this->$userPassword = $password;
                    return true;
                } 
            }
            return false;
        } 
    }
?>