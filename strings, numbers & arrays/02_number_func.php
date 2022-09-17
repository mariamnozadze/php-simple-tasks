<?php

// Number checking functions
is_float(1.25); // true
is_integer(3.4); // false
is_numeric("3.45"); // true
is_numeric("3g.45"); // false

// Conversion
$strNumber = '12.34';
$number = (float)$strNumber; // Use floatval(), (int), intval()
var_dump($number);
echo '<br>';

// Number functions
echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';

/*
abs(-15) 15
pow(2, 3) 8
sqrt(16) 4
max(2, 3) 3
min(2, 3) 2
round(2.4) 2
round(2.6) 3
floor(2.6) 2
ceil(2.4) 3
*/

// Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, '.', ' ') . '<br>'; 
//123 456 789.12
