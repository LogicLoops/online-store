<?php

    include 'class.product.php';

    class Cart 
    {
        private $inventory = array();

        function __construct()
        {

        }

        public function addItem(Product $product)
        {
            array_push($inventory, $product);
        }

        public function removeItem(Product $product)
        {
            $inventory = array_diff($inventory, array($product));
        }

        public function getTotal()
        {
            $total = 0.0;
            $invlen = count($this->$inventory);
            for($x = 0; $x < $invlen; $x++) 
            {
                $total += $inventory[$x]->getPrice();
            }
            return $total;
        }

        public function clearInventory()
        {

        }
    }

?>