<?php

function add(){
    $x = 4;
    $y = 4;
    echo "fisrt function ";
    echo 'value is ' . $x + $y ;
}

add();

function sum($x, $y){
    // echo "paramaterize function value is: ";
    return $x + $y;
}
$sumOfTotal = sum(5,23);
echo '<br>Total is:' .$sumOfTotal;


$sbtract = function($x , $y){
return $x - $y;
};
echo "<br> subtraction " . $sbtract(34,23);

$multiply = fn($x , $y) =>  $x * $y;
    
    echo "<br> subtraction " . $multiply(34,23);