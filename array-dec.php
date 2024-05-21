<?php

$arr = [1,3,5,6,8];
$fruits = array('apple', 'orange','mango');

$hex  = [
    'red' => '#f00',
    'blue' => '#0f0',
    'gree' => '#00f'
];

$person = [[
    'firstname' => 'Asad',
    'lastname' => 'khan',
    'email' => 'asad@gmail.com',
],[
    'firstname' => 'Ali',
    'lastname' => 'khan',
    'email' => 'ali@gmail.com',
],[
    'firstname' => 'khizer',
    'lastname' => 'khan',
    'email' => 'khizr@gmail.com',
]];


echo $person[1]['email'] . '<br>';
var_dump(json_encode($person));
echo $hex['red'] . '<br>';
echo $arr[3];
print_r($fruits);
var_dump($fruits);