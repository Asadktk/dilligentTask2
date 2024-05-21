<?php

$cars  = ["Volvo", "BMW", "Toyota"];
// var_dump(in_array('Volvo', $cars));

$cars[] =  "test";
array_push($cars, 'testing');

array_unshift($cars,"value1");

$chunk_array = array_chunk($cars, 2);

// array_pop($cars);

// array_shift($cars);

// unset($cars[2]);
print_r($chunk_array);

echo '<br>';

$arr1 = [1,2,3,4];
$arr2 = [34,3,5,6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];
print_r($arr3);
print_r($arr4);
echo '<br>';


$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");
echo '<br>';

$c=array_combine($fname,$age);
print_r($c);
echo '<br>';


$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($a));

echo '<br>';
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
print_r($result);
echo '<br>';

$num = range(1,20);
print_r($num);

echo '<br>';


function myfunction($v)
{
  return($v*$v);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));

echo '<br>';

function test_odd($var)
  {
  return($var & 1);
  }

$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd"));