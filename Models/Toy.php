<?php

class Toy extends Product {
    public $weight;

    public function __construct($_image, $_name, $_price, $_type, $_animal, $_weight) {
        parent::__construct($_image, $_name, $_price, $_type, $_animal);

        $this->weight = $_weight;
    }
}