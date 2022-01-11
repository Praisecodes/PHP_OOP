<?php
class Animal{
    public $color;
    public $breed;
    public function __construct($c, $b)
    {
        $this->color = $c;
        $this->breed = $b;
    }

    public function message(){
        return "He's Dog the " .$this->color. " " .$this->breed. " is cute!!";
    }
}

$animal = new Animal("Black", "Labrado");
echo $animal->message();
?>