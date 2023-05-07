<?php

class PetHouse extends Product {
    public $color;

    public function __construct($_image, $_name, $_type, $_animal, $_color) {
        parent::__construct($_image, $_name, $_type, $_animal);

        $this->color = $_color;
    }
}