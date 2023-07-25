<?php
require_once 'Product.php';

class AnimalProduct extends Product {
    private $category;

    public function __construct($name, $price, $photoUrl, $category) {
        parent::__construct($name, $price, $photoUrl);
        $this->category = $category;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
    }
}
?>
