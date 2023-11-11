<?php
$fruits = ['apple', 'banana', 'mango'];
// get the size of the array
// echo count($fruits);

// echo "</br>";
// //search a particular array
// var_dump(in_array('apple', $fruits));

// // add to array

$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry');
//adding at the beginning
array_unshift($fruits, 'jaackfruits');

print_r($fruits);

?>