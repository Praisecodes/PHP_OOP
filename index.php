<?php
class Dog{
    public $breed;
    public $color;
    public $name;
    public function __construct($b, $c, $n)
    {
        $this->breed = $b;
        $this->color = $c;
        $this->name = $n;
    }

    public function Display($OwnerName){
        return $OwnerName . "'s Dog " . $this->name . " the " . $this->color . " " . $this->breed . " is pretty cute!!";
    }
}

$dog = new Dog("German Shepherd", "black", '"Betty"');
echo $dog->Display("Jake");
?>