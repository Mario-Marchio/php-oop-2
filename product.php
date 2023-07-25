<?php
class Product {
    protected $name;
    protected $price;
    protected $photoUrl;

    public function __construct($name, $price, $photoUrl) {
        $this->name = $name;
        $this->price = $price;
        $this->photoUrl = $photoUrl;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getPhotoUrl() {
        return $this->photoUrl;
    }

    public function setPhotoUrl($photoUrl) {
        $this->photoUrl = $photoUrl;
    }

    public function getFormattedPrice() {
        return number_format($this->price, 2) . " €";
    }
}
?>
