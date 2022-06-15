<?php
    require_once __DIR__ . "/Product.php";

    class Hygiene extends Product{
        public $quantity;
        public $type;

        function __construct($_name, $_brand, $_description, $_price, $_quantity, $_type)
        {
            parent::__construct($_name, $_brand, $_description, $_price);
            $this->quantity = $_quantity;
            $this->type = $_type;
        }
    }
?>