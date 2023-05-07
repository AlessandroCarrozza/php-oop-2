<?php

class Food extends Product {
    public $calories;

    public function __construct($_image, $_name, $_price, $_type, $_animal, $_calories) {
        parent::__construct($_image, $_name, $_price, $_type, $_animal);

        $this->calories = $_calories;
    }
}