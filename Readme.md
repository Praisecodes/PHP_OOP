# Praise Codes Learning PHP OOP
## Code Explanation:
### This is actually the explanation for the "Car.php" file

```PHP
<?php
class Car{
    #code...
}
?>
```
Now what this part of the code did was to simply define a class like you would probably do in every language you have ever used. Now we move on to the part where you have some real code to do stuff; the part with "`#code...`"

First of all we need to define public variables, for the car we'd have attributes like the model and color and also the plate number and size (if it's big or small) but not all these are necessary, we'd just focus on the model and color. So let's get to it.<br/>
<br/>
## Declaring the public variables:
```PHP
<?php
class Car{
    public $model;
    public $color;
    #more code...
}
?>
```

Now that's done, we move on to creating a constructor for the program.<br/>
## Why a constructor?
Well, I wondered why use a constructor when I could use a regular method to achieve the exact same result and I came up with this reason.
```
When a class is instanciated the constructor is automatically called so that means that whenever I call this class I have the opportunity to pass values I want to update automatically to this constructor as a parameter and I never have to worry about them again.
```
Well, having said that, our main aim is to get the color and the model of the car automatically whenever an instance of the class is created and then use that later on. So let's get to that.<br/><br/>

## Declaring/Defining the constructor:
```PHP
<?php
class Car{
    public $model;
    public $color;

    public function __constructor($m, $c){
        $this->model = $m;
        $this->color = $c;
    }
}
?>
```

That's done, now when I'm to create an instance of the class I can pass the parameters and the class public variables are updated automatically on the class instanciation.
Now think of this: 
```
If an instance of the class is created, how do we use the data in the class?
```
For this we need another method in other to display a message to the reader/viewer; and this method will be called `message` because I guess I like being very descriptive with names, more or less.<br/>
But before we do that, we need to know what output we expect.<br/>Well, I do.
## Expected Output:
```
Jake's car is a red Toyota!
```
<br/>
So now let me write code to achieve that.

```PHP
<?php
class Car{
    public $model;
    public $color;
    
    public function __constructor($m, $c){
        $this->model = $m;
        $this->color = $c;
    }

    public function message($name){
        return $name . "'s car is a " . $this->color . " " . $this->model . "!";
    }
}

$NewCar = new Car("Toyota", "red");
echo $NewCar->message("Jake");
?>
```
## And that's it. Output:
```
Jake's car is a red Toyota!
```
<br/>

# Anyways y'all, if you really read all the way up to this point then damn!! You've got sometime on your hands yo!! Cause how'd you even settle to read all this??

## Lol Just Kidding, I'm learning all this PHP things for the first time and I thought it'll be cool to store for later on, just as a reminder.<br/> Peace.