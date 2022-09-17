<?php
$name = 'Mariam';

$string = "Hello, I am $name"; // Hello, I am Mariam
$string2 = 'Hello, I am $name'; // Hello, I am $name

echo $string . '<br>';
echo $string2 . '<br>';


//string func

$string = "    Hello World      ";

echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
echo "2 - " . trim($string) . '<br>' . PHP_EOL;
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;
echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; // Change into world
echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL;
echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL;
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL;
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;

/*
1 - 21
2 - Hello World
3 - Hello World
4 - Hello World
5 - 2
6 - dlroW olleH
7 - HELLO WORLD
8 - hello world
9 - Hello
10 - hELLO
11 - Hello World
12 -
13 - 10
14 - o World
15 - Hello PHP
16 - Hello PHP
*/
