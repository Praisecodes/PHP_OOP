<?php
class Car{
    public $color;
    public $model;
    public function __construct($c, $m){
        $this->color = $c;
        $this->model = $m;
    }

    public function message(){
        return "My car is a " .$this->color. " " .$this->model. "!";
    }

    public function newMessage($name){
        return $name. "'s car is a " .$this->color. " " .$this->model. "!";
    }
}

$myCar = new Car("Black", "Volvo");
echo $myCar->message();
echo "<br/>";
$jakeCar = new Car("Black", "Lexus");
echo $jakeCar->newMessage("Jake");
?>