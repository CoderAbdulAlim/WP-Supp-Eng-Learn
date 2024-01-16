<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n = 5;
        if ($n == 5):
    ?>
    <h1>Hello</h1>
    <?php endif; ?>
<?php

// printf();

// %s
// %d
// %f
// %b
// %o


// $firstName = 'Mr.';
// $secondName = 'Abul';

// printf('My name is %s %s', $firstName, $secondName);
// printf('My name is %2$s %1$s', $firstName, $secondName);

// sprintf();

// $name = sprintf('My name is %2$s %1$s', $firstName, $secondName);

// echo $name;

// if(true){
//     echo '';
// }

// $a = 10;
// $b = 20;

// if($a < $b){
//     echo 'a is greater then b.';
// }


// $a = 10;
// $b = 20;

// if($a < $b){
//     echo true;
// }else{
//     echo false;
// }

// $a = 10;
// $b = 20;

// if($a < $b){
//     echo true;
// }else if($a === $b){ 
//     echo true;
// }else{
//     echo false;
// }

// ৩টি উপরের চেক করতে হলে switch বা loop ব্যবহার করা ভালো।
?>
</body>
</html>
<?php
// ternary operator
// $aa = 10;
// $bb = 20;

// echo $aa > $bb ? true:false;

// switch(n){
//     case label1:
//         echo '';
//         break;
    
//     case label2:
//         echo '';
//         break;

//     default:
//     echo '';
// }

// $favColor = 'red';

// switch($favColor){
//     case 'red':
//         echo 'red';
//         break;
    
//     case 'black':
//         echo 'black';
//         break;

//     default:
//     echo 'white';
// }

// while(true){
//     echo '';
// // }

// $x = 1;

// while($x <= 5){
//     echo 'The number is: ' . $x . PHP_EOL;
//     $x++;
// }


// $x = 1;

// while($x <= 5){
//     $x++;
//     echo 'The number is: ' . $x . PHP_EOL;
// }

// $x = 1;

// while($x <= 5):
//     $x++;
//     echo 'The number is: ' . $x . PHP_EOL;
// endwhile;

// $x = 1;

// do {
//     $x++;
//     echo 'The number is: ' . $x . PHP_EOL;
// }while($x <= 5);


// for($i=0; $i < 5; $i++){
//     echo 'The number is: ' . $i . PHP_EOL;
// }

// $colors = array('red', 'green', 'blue')
// $colors = ['red', 'green', 'blue'];
// var_dump($colors);

// foreach($colors as $color){
//     echo 'The color name is: ' . $color . PHP_EOL;
// }

// foreach($colors as $key => $value){
//     echo 'The ' . $key . 'no color name is: ' . $value . '.' . PHP_EOL;
// }

// function sum($x, $y){    
    
//     $z = $x + $y;

//     return $z;
// }

// echo '5 + 10 = ' . sum(5, 10) . PHP_EOL;

// require 'about.php';
// include 'about.php';


// require_once 'about.php';
// include_once 'about.php';

