<?php 
// // function declaration.

// function addNumbers($a, $b) {
//     $sum = $a + $b;
//     return $sum;
//    }
//    $result = addNumbers(2, 3);
//    echo "$result";

   // with default and mandatory argument.
   function addNumbers($a, $b, $printResult = false) {
    $sum = $a + $b;
    if ($printResult) {
    echo 'The result is ' . $sum;
    }
    return $sum;
   }
   $sum1 = addNumbers(1, 2);
   $sum1 = addNumbers(3, 4, false);
   $sum1 = addNumbers(5, 6, true); // it will print the result


   // sending argument by value

   function modify($a) {
    $a = 3;
   }
   $a = 2;
   modify($a);
   var_dump($a); // prints 2

   // sending by reference.

   function mdfy(&$a) {
    $a = 3;
   }
   $a = 2;
   mdfy($a);
   var_dump($a); // prints 3

   //Type hinting and return types.

 //  declare(strict_types=1); //strict_types declaration must be the very first statement in the script.
function addNumber(int $a, int $b, bool $printSum): int {
 $sum = $a + $b;
 if ($printSum) {
 echo 'The sum is ' . $sum;

}
return $sum;
}
addNumber(1, 2, true);
addNumber(1, '2', true); // it fails when strict_types is 1
addNumber(1, 'something', true); // it always fails
