<?php
// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

//Arithmetic opeartions
// echo ($a + $b) * $c . '<br>'; // 10.8
// echo $a - $b . '<br>'; // 1
// echo $a * $b . '<br>'; // 20
// echo $a / $b . '<br>'; // 1.25
// echo $a % $b . '<br>'; // 1


// // Assignment with math operators
// $a += $b;
// echo $a . '<br>'; // 9
// $a -= $b;
// echo $a . '<br>'; // 5
// $a *= $b;
// echo $a . '<br>'; // 20
// $a /= $b;
// echo $a . '<br>'; // 5
// $a %= $b;
// echo $a . '<br>'; // 1


// // Increment opeartor 
// echo $a++ . '<br>'; // 5
// echo ++$a . '<br>'; // 7

// // Decrement opeartor 
// echo $a-- . '<br>'; // 7
// echo --$a . '<br>'; // 5


// Number checking functions
is_float(1.25); // true
is_double(1.25); // true
is_int(5); // true
is_numeric("3.45"); // true
is_numeric("3g.45"); // false

// Conversion
$strNumber = '12.34';
// $number = (int)$strNumber;
// var_dump($number); // int(12)

// $number = (float)$strNumber;
// var_dump($number); // float(12.34)