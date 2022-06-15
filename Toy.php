<?php
    require_once __DIR__ . "/Product.php";

    class Toy extends Product {
        public $type;
        public $material;

        function __construct($_name, $_brand, $_description, $_price, $_type, $_material)
        {
            parent::__construct($_name, $_brand, $_description, $_price);
            $this->type = $_type;
            $this->material = $_material;
        }
    }