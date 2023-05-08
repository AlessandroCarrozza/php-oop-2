<?php

require_once __DIR__ . "/../Traits/Quantifiable.php";

class PetHouse extends Product {
    public $color;

    use Quantifiable;

    public function __construct($_image, $_name, $_type, $_animal, $_color) {
        parent::__construct($_image, $_name, $_type, $_animal);

        $this->color = $_color;
    }
}