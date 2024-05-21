<?php

$age = 17;

if ($age >= 18) {
    echo " Youre old enough to vote";
} else {
    echo " sorrry Youre old not enough to vote <br>";
}


$posts = ['first post <br>'];

if (!empty($posts)) {
    echo $posts[0];
} else {
    echo "there is no posts <br>";
}

// echo !empty($posts) ? $posts[0] : "there is no posts";

echo !empty($posts) ? $posts[0] : "there is no posts <br>";
$fisrtPost = !empty($posts) ? $posts[0] : "there is no posts <br>";

// when we have no else then put null
$fisrtPost = empty($posts) ? $posts[0] : null;
echo $fisrtPost;


// switch 
$color = 'e';
switch ($color) {
    case 'red':
        echo 'Youre favorite color is red';
        break;

    case 'blue':
        echo 'Youre favorite color is blue';
        break;
    case 'orange':
        echo 'Youre favorite color is orange';
        break;
    default:
    echo "youre favorite color is not mentioned";
}
