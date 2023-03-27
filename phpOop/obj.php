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

}

$Mango=new fruit("Proper Mango","Yellow");

echo $Mango->get_name()."<br>".$Mango->get_color();













?>



















</body>
</html>