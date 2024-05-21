<?php
// while
$x = 1;
while($x < 15){
    echo 'Number' .$x . '<br>';
    $x = $x + 1;
}
// do while 
$x = 1;
do{
    echo 'do while Number' .$x . '<br>';
    $x = $x + 1;
}while($x < 5);

// for each loop

$fruits = ['orange', 'mango', 'apple', 'banana'];
for($i = 0; $i < count($fruits); $i++){
    echo $fruits[$i] . '<br>';
}

foreach($fruits as $index =>$fruit){
    echo $index . ' - ' . $fruit . ' foreach loop<br>';

}