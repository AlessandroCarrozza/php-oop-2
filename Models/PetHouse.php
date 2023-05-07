<?php

class PetHouse extends Product {
    public $space;

    public function __construct($_image, $_name, $_price, $_type, $_animal, $_space) {
        parent::__construct($_image, $_name, $_price, $_type, $_animal);

        $this->space = $_space;
    }
}