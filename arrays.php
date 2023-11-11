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




















$person = [
    'first_name' => 'Abdullah',
    'second_name' => 'Numan',
    'email' => 'shakil@gmail.com'
];
 
echo $person['first_name'];



$people = [
    [
        'first_name' => 'Abdullah',
        'second_name' => 'Numan',
        'email' => 'shakil@gmail.com'
    ],

    [
        'first_name' => 'Abdullah',
        'second_name' => 'Numan',
        'email' => 'shakil@gmail.com'
    ],
    [
        'first_name' => 'Abdullah',
        'second_name' => 'Numan',
        'email' => 'shakil@gmail.com'
    ]
    ];
    echo "</br>";

echo $people[1]['email'];
?>