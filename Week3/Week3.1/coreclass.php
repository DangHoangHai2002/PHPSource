<?php
    class Product {
        public $id;
        public $name;
        public $color;
        public $amount;
        public $price;
    
        public function __construct($id, $name, $color, $amount, $price) {
            $this->id = $id;
            $this->name = $name;
            $this->color = $color;
            $this->amount = $amount;
            $this->price = $price;
        }
        public function getId() {
            return $this->id;
        }
    
        public function getName() {
            return $this->name;
        }
    
        public function getColor() {
            return $this->color;
        }
    
        public function getAmount() {
            return $this->amount;
        }
    
        public function getPrice() {
            return $this->price;
        }
        public function setId($id) {
            $this->id = $id;
        }
    
        public function setName($name) {
            $this->name = $name;
        }
    
        public function setColor($color) {
            $this->color = $color;
        }
    
        public function setAmount($amount) {
            $this->amount = $amount;
        }
    
        public function setPrice($price) {
            $this->price = $price;
        }
        public function calculateSubtotal() {
            $subtotal = intval($this->price) * intval($this->amount);
            return $subtotal;
        }
        public function toString() {
            $subtotal = $this->calculateSubtotal();
            return $this->id . '-' . $this->name . '-' . $this->color . '-' . $this->amount . '-' . $this->price . '-' . $subtotal;
        }
}
?>