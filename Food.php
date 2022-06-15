<?php
    require_once __DIR__ . "/Product.php";

    class Food extends Product {
        public $weight;
        public $flavour;

        function __construct($_name, $_brand, $_description, $_price, $_weight, $_flavour)
        {
            parent::__construct($_name, $_brand, $_description, $_price);
            $this->weight = $_weight;
            $this->flavour = $_flavour;
        }
    }
?>