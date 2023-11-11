<?php
$a = 10;
$b = 3;
var_dump($a + $b); // 13
echo "</br>";
var_dump($a - $b); // 7
echo "</br>";
var_dump($a * $b); // 30
echo "</br>";
var_dump($a / $b); // 3.333333...
echo "</br>";
var_dump($a % $b); // 1
echo "</br>";
var_dump($a ** $b); // 1000
echo "</br>";
var_dump(-$a); // -10

//Assignment operators

$a = 3 + 4 + 5 - 2;
var_dump($a); // 10

$a = 13;
$a += 14; // same as $a = $a + 14;
var_dump($a);
$a -= 2; // same as $a = $a - 2;
var_dump($a);
$a *= 4; // same as $a = $a * 4;
var_dump($a);

//Comparison operators
var_dump(2 < 3); // true
var_dump(3 < 3); // false
var_dump(3 <= 3); // true
var_dump(4 <= 3); // false
var_dump(2 > 3); // false
var_dump(3 >= 3); // true
var_dump(3 > 3); // false
var_dump(1 <=> 2); // int less than 0
//spaceship operator
var_dump(1 <=> 1); // 0
var_dump(3 <=> 2); // int greater than 0

// Type juggling and identical operator.
$a = 3;
$b = '3';
$c = 5;
var_dump($a == $b); // true
var_dump($a === $b); // false
var_dump($a != $b); // false
var_dump($a !== $b); // true
var_dump($a == $c); // false
var_dump($a <> $c); // true

// Logical Operators
var_dump(true && true); // true
var_dump(true && false); // false
var_dump(true || false); // true
var_dump(false || false); // false
var_dump(!false); // true

// Incrementing and decrementing operators
$a = 3;
$b = $a++; // $b is 3, $a is 4
var_dump($a, $b);
$b = ++$a; // $a and $b are 5
var_dump($a, $b);



?>