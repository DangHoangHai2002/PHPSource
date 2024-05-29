<?php
class Fruit{
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro(){
        echo "This fruit name is {$this->name} and have  color of {$this->color}.<br>";
    }
}
class Stawberry extends Fruit {
    public function message(){
        echo 'AM i a Fruit or a berry? ';
    }
}
$stawberry=new Stawberry("Strawberry", "Red");
$stawberry->intro();
$stawberry->message();
?>