<!DOCTYPE html>
<html lang="en">
<body>
    
<?php

class fruit {
    public $name, $color;

    function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }

    public function intro(){
        echo "A {$this->name} is a fruit and the color is {$this->color}";
    }

}

class cherry extends fruit{
    public function message(){
        echo "Chery (Child Class) <br>";
    }


}


$cherry=new cherry("Cherry","red");
$cherry->message();
$cherry->intro();













?>



















</body>
</html>