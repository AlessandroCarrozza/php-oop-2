<?php

require_once __DIR__ . "/../Traits/Quantifiable.php";

class Toy extends Product {
    public $weight;

    use Quantifiable;

    public function __construct($_image, $_name, $_type, $_animal, $_weight) {
        parent::__construct($_image, $_name, $_type, $_animal);

        $this->weight = $_weight;
    }
}