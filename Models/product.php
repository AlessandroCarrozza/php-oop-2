<?php



class Product {
    public $image;
    public $name;
    protected $price;
    public $type;
    public $animal;

    public function __construct($_image, $_name, $_type, $_animal) {
        $this->image = $_image;
        $this->name = $_name;
        $this->type = $_type;
        $this->animal = $_animal;
    }

    public function setPrice($_price) {
        $this->price = $_price;

        if (!is_numeric($_price) || $_price <= 0) {
            throw new Exception("Il valore passato non è un numero oppure è un numero sotto lo 0.1");
        } 
    }

    public function getPrice() {
        return $this->price;
    }
}