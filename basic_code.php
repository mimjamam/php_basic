<!-- <?php

$txt ="Hello world !!";
$x=5;
$y=6;
echo "I love " .$txt . "<br>";
echo $x + $y;

?> -->

<!-- //classes and objects -->
<?php
class Fruit{
    public $name;

    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
}

$apple=new Fruit();

$apple ->set_name('Apple');

echo $apple -> get_name();


?>


