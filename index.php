<?php
class Dog{
    public $breed;
    public $name;
    public $color;

    public function __construc($b,$c){
        $this->breed = $b;
        $this->color = $c;
    }

    public function Display($name){
        echo $name . "'s Dog, the " . $this->color . " " . $this->breed . ", ";
    }
}

$Dave = new Dog("Labrado", "Brown");
$Dave->Display("David");
?>