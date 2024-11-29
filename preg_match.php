<?php

$string = "My 1name2 is Monmoy , 1Monmoy2 is my name";

// echo $string;

echo preg_match("/(z|p)/", $string).'<br>';
echo preg_match("/(a|e)/", $string).'<br>';
echo preg_match("/[abc]/", $string).'<br>';
echo preg_match("/[^abc]/", $string).'<br>';
echo preg_match("/[a-z]/", $string).'<br>';
echo preg_match("/[A-Z]/", $string).'<br>';
echo preg_match("/[a-zA-Z]/", $string).'<br>';
echo preg_match("/[0-9]/", $string).'<br>';
echo preg_match("/[^0-9]/", $string).'<br>';
echo preg_match("/M/", $string).'<br>';
echo preg_match("/M*/", $string).'<br>';

preg_match_all("/M.*y/", $string,$array); // My name is Monmoy , Monmoy is my
preg_match_all("/M+/", $string,$array); 
print_r($array); // Array
// (
//     [0] => Array
//         (
//             [0] => M
//             [1] => M
//             [2] => M
//         )

// )
preg_match_all("/M.+/", $string,$array);
print_r($array);
// Array
// (
//     [0] => Array
//         (
//             [0] => My 1name2 is Monmoy , 1Monmoy2 is my name
//         )

// ) 

preg_match_all("/1.*2/", $string,$array);
print_r($array); 
// Array
// (
//     [0] => Array
//         (
//             [0] => 1name2 is Monmoy , 1Monmoy2
//         )

// )

preg_match_all("/1.*?2/", $string,$array);
print_r($array).'<br>';
// (
//     [0] => Array
//         (
//             [0] => 1name2
//             [1] => 1Monmoy2
//         )

// )
echo "<br>" ;
echo "<br>" ;

echo preg_match("/M{1}/", $string).'<br>'; //1
echo preg_match("/M{2}/", $string).'<br>'; //0
echo preg_match("/M{1,}/", $string).'<br>'; //1
echo preg_match("/\D{3}/", $string).'<br>'; //1 

preg_match_all("/\D{3}/", $string,$array).'<br>'; //1

print_r($array);
// Array
// (
//     [0] => Array
//         (
//             [0] => My 
//             [1] => nam
//             [2] =>  is
//             [3] =>  Mo
//             [4] => nmo
//             [5] => y ,
//             [6] => Mon
//             [7] => moy
//             [8] =>  is
//             [9] =>  my
//             [10] =>  na
//         )

// )

preg_match_all("/\S{3}/", $string,$array).'<br>'; //1

print_r($array);

// Array
// (
//     [0] => Array
//         (
//             [0] => 1na
//             [1] => me2
//             [2] => Mon
//             [3] => moy
//             [4] => 1Mo
//             [5] => nmo
//             [6] => nam
//         )

// )
echo "<br>" ;
echo "<br>" ;

echo preg_match("/^M/", $string).'<br>';
echo preg_match("/e$/", $string).'<br>';
$string = "^My 1name2 is Monmoy , 1Monmoy2 is my name";
echo preg_match("/\^M.*e$/", $string).'<br>';
