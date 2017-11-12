<?php

    class Product
    {
        private $price = 0.0;
        private $quantity = 0;
        private $name = "";
        private $description = "";
        private $imageLink = "";

        function __construct()
        {

        }

        public function getPrice()
        {
            return $this->$price;
        }

        public function setPrice($price)
        {
            $this->$price = $price;
        }

        public function getQuantity()
        {
            return $this->$quantity;
        }

        public function setQuantity($quant)
        {
            $this->$quantity = $quant;
        }

        public function getName()
        {
            return $this->$name;
        }

        public function setName($name)
        {
            $this->$name = $name;
        }

        public function getDescription()
        {
            return $this->$description;
        }

        public function setDescription($description)
        {
            $this->$description = $description;
        }

        public function getImageLink()
        {
            return $this->$imageLink;
        }

        public function setImageLink($imageLink)
        {
            $this->$imageLink = $imageLink;
        }
    }
?>