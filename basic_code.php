<!-- <?php

$txt ="Hello world !!";
$x=5;
$y=6;
echo "I love " .$txt . "<br>";
echo $x + $y;

?> -->

<!-- //classes and objects -->
<!-- <?php
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


?> -->

<!-- foreach loop -->
<!-- <?php

//  for ($x=0; $x<=10;$x++){
//     echo "The number is: $x <br>";

//  }


$colors= array("red","green","blue","yellow");

foreach ($colors as $value){
    echo "$value <br>";
}

?>  -->


                                            <!-- Top 100 php function -->
<?php

//count

// $array =array('fox','bear','deer','cat','dog','elephant','wolf',
//                 array('blue','red','orange','white','black'));

// echo count($array,COUNT_RECURSIVE).'<br>';// print all element inside array if it has another array also
// echo count($array,COUNT_NORMAL); // print only array element without 2nd array all element
// die;

// for($i=0;$i<count($array);$i++)
// {
//     echo $array[$i].'<br>';
// }
/////////////////////////////////is_array////////////////////////////////////////
// $array =array('fox','bear','deer','cat','dog','elephant','wolf');

//echo count($array,COUNT_RECURSIVE).'<br>';// print all element inside array if it has another array also
//echo count($array,COUNT_NORMAL); // print only array element without 2nd array all element
//die;
// if(is_array($array)){

//     for($i=0;$i<count($array);$i++)
// {
//     echo $array[$i].'<br>';
// }

// }

// else {
//     echo "Can't loop through the variable , not an array ";
// }
/////////////////////////////////////substr////////////////////////////////

// $text="hey what's up buddy!";
// $extract=substr($text,10,5); // output :up b here starting index and how many word need to extract from the text
// $extract=substr($text,-6);// output : buddy!
// echo $extract;
/////////////////////////////////////in_array////////////////////////////////
$array =array(12.5,'fox','bear','deer','cat',100,'dog','elephant','wolf');

// if(in_array(100,$array,true)){ //strict is false // strict check the all datatype is similar or not // here 100 is string and its the same datatype

//     echo "the value is found!";
// }
/////////////////////////////////////explode////////////////////////////////

$text="red, orange, black, white, cyan, teal, purple, pink";
$colmuns = "bob|nancy|rachel|molly|victoria"; 

//$text_array =explode(", ", $text);
// $text_array =explode("|", $colmuns,2); //here 2 is the limit of array value key part
// $text_array =explode("|", $colmuns,-1);
// print_r($text_array);

/////////////////////////////////////srt_replace////////////////////////////////

// $bodytag = str_replace("%body%","red","<body text='%body%");
// echo $bodytag;

// $vowels = array('a','e','i','o','u','A','E','I','O','U');
// $text="Mimjamam Ul Haque Monmoy";

// echo str_replace($vowels,"",$text); // The line below will remove all vowels from $text

/////////////////////////////////////implode////////////////////////////////
$array =array(12.5,'fox','bear','deer','cat',100,'dog','elephant','wolf');

$glued = implode(",",$array);

// echo $glued;
// die;
// echo strlen($glued); //die;

/////////////////////////////////////array_merge////////////////////////////////
$array =array(12.5,'fox','bear','deer','cat',100,'dog','elephant','wolf');
$vowels = array('a','e','i','o','u','A','E','I','O','U');
$merged_array = array_merge($vowels,$array);
//print_r($merged_array);

/////////////////////////////////////strpos////////////////////////////////
echo strpos($text,'black')."<br>"; 
$array = array(12.5, 'fox', 'bear', 'deer', 'cat', 100, 'dog', 'elephant', 'wolf');

// Use array_search to find the index of 'fox' in the array
$index = array_search('fox', $array);

echo $index; 


?>