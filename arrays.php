<?php

// Initialization and different types of array representation.

$empty1 = [];
$empty2 = array();
$names1 = ['Harry', 'Ron', 'Hermione'];
$names2 = array('Harry', 'Ron', 'Hermione');
$status1 = [
 'name' => 'James Potter',
 'status' => 'dead'
];
$status2 = array(
 'name' => 'James Potter',
 'status' => 'dead'
);


// Array within array.

$books = [
    '1984' => [
    'author' => 'George Orwell',
    'finished' => true,
    'rate' => 9.5
    ],
    'Romeo and Juliet' => [
    'author' => 'William Shakespeare',
    'finished' => false
    ]
   ];


// Reinitialize the array.

   $names = ['Harry', 'Ron', 'Hermione'];
   $status = [
    'name' => 'James Potter',
    'status' => 'dead'
   ];
   $names[] = 'Neville';
   $status['age'] = 32;
   print_r($names);
   print_r($status);

   // Accessing array.

  $names = ['Harry', 'Ron', 'Hermione'];
  $names['badguy'] = 'Voldemort';
  $names[8] = 'Snape';
  $names[] = 'McGonagall';
  print_r($names);

  // The empty() and isset() function.
  
  $string = '';
 $array = [];
 $names = ['Harry', 'Ron', 'Hermione'];
 var_dump(empty($string)); // true
 var_dump(empty($array)); // true
 var_dump(empty($names)); // false
 var_dump(isset($names[2])); // true
 var_dump(isset($names[3])); // false


 // searching element using two different function and differend result.
 $names = ['Harry', 'Ron', 'Hermione'];
 $containsHermione = in_array('Hermione', $names);
 var_dump($containsHermione); // true
 $containsSnape = in_array('Snape', $names);
 var_dump($containsSnape); // false
 $wheresRon = array_search('Ron', $names);
 var_dump($wheresRon); // 1
 $wheresVoldemort = array_search('Voldemort', $names);
 var_dump($wheresVoldemort); // false

 // Ordering arrays with three differnt way.

 $properties = [
    'firstname' => 'Tom',
    'surname' => 'Riddle',
    'house' => 'Slytherin'
   ];
   $properties1 = $properties2 = $properties3 = $properties;
   sort($properties1);
   var_dump($properties1);
   asort($properties3);
   var_dump($properties3);
   ksort($properties2);
   var_dump($properties2);

   // Other Array function. 
   //array keys and array values.
   $properties = [
    'firstname' => 'Tom',
    'surname' => 'Riddle',
    'house' => 'Slytherin'
   ];
   $keys = array_keys($properties);
   var_dump($keys);
   $values = array_values($properties);
   var_dump($values);

   //get number of element

   $names = ['Harry', 'Ron', 'Hermione'];
  $size = count($names);
  var_dump($size); // 3

  // merge two or more arrays into one with array_merge
  $good = ['Harry', 'Ron', 'Hermione'];
$bad = ['Dudley', 'Vernon', 'Petunia'];
$all = array_merge($good, $bad);
var_dump($all);

?>