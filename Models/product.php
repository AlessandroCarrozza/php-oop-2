<?php

class Product {
    public $image;
    public $name;
    public $price;
    public $type;
    public $animal;

    public function __construct($_image, $_name, $_price, $_type, $_animal) {
        $this->image = $_image;
        $this->name = $_name;
        $this->price = $_price;
        $this->type = $_animal;
    }
}