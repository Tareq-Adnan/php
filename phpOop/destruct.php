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

    function get_name(){
        return $this->name;
    }

    function get_color(){
        return $this->color;
    }

    function __destruct(){
        echo "The name is {$this->name} and the color is {$this->color}";
    }

}

$Mango=new fruit("Proper Mango","Yellow");















?>



















</body>
</html>