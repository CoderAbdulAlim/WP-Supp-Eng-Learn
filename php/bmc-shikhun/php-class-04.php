<?php

// function name(){

// }

// //no space function name
// function my name(){
    
// }

// function hello(){
//     echo 'Hello world';
// }

// //must call function
// hello();

// function fullName($firstName, $secondName) //parameter
// {
//     echo $firstName . ' ' . $secondName;
// }

// fullName('Polash', 'Mahmud'); //argument

// fullName('Abc', 'Ced');

// function sum($num1, $num2){
//     $total = $num1 + $num2;

//     echo "Total : $total";
// }

// // sum(10, 50);
// // sum(100, 50);
// // sum(10, 590);
// sum(2);

// function sum($num1 = 0, $num2 = 0){
//     $total = $num1 + $num2;

//     echo "Total : $total";
// }

// sum(2);
// sum(2, 8);

// function sum($num1, $num2){
//     $total = $num1 + $num2;

//     echo "Total : $total";
// }

// sum(2, "5 number");

// function sum(int $num1, int $num2){
//     $total = $num1 + $num2;

//     echo "Total : $total";
// }

// sum(2, "5 number");

// //join
// $a = ['a', 'b', 'c'];
// echo join(", ", $a);

// function makeCoffee($types =array('cappuccino'), $coffeeMaker = NULL){
//     $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
//     return "Making a cup of " . join(", ", $types)." with $device. \n";
// }

// echo makeCoffee();
// echo makeCoffee(['cappuccino', 'lavazza'], 'teapot');

// function sum(int $x, int $y){
//     $z = $x + $y;

//     return "Hello $z";
// }

// echo sum(4, 5);

// function add_five(&$value){
//     $value += 10;
// }

// $num = 2;

// add_five($num);

// echo $num;

// function add_five($value){
//     $value += 10;
// }

// $num = 2;

// add_five($num);

// echo $num;

// include_once 'connect_page_04.php';

// echo sum(4, 5);


// function sum(...$numbers){
//     var_dump($numbers);
// }

// echo sum(1, 2, 3, 4, 5, 6, 7, 8, 9);


// function sum(...$numbers){
//     $total = 0;

//     foreach ($numbers as $number){
//         $total += $number;
//     }
//     return $total;
// }

// echo sum(1, 2, 3, 4, 5, 6, 7, 8, 9);


// function avg(...$numbers){
//     $total = 0;
    
//     $numLength = count($numbers);

//         foreach ($numbers as $number){
//             $total += $number;
//         }

//     return $total / $numLength;
// }

// function sum(...$numbers){
//     $total = 0;

//     foreach ($numbers as $number){
//         $total += $number;
//     }
//     return $total;
// }

// function avg(...$numbers){
//     $total = sum(...$numbers);

//     return $total / count($numbers);
// }

// echo sum(1, 2, 3, 4, 5, 6, 7, 8, 9);
// echo avg(1, 2, 3, 4, 5);

//recursive function যে ফাংশন নিজে নিজেকে কল করে।
// function number($n){
//     echo $n. "\n";

//     while ($n <= 100){
//         break;
//     }

//     $n++;

//     number($n);
// }

// number (1);

// //this is factorial function
// // here use recursive function
// function number($n){
//     if($n <= 1){
//         return 1;
//     }
//     else{
//         return $n*number($n-1);
//     }
// }

// echo number (3);

// //Global variable test
// $x = 5;

// function myTest(){
//     return $x;
// }

// echo myTest();

// //Global variable test
// $x = 5;

// function myTest(){
//     global $x;
//     return $x;
// }

// echo myTest();

//Static keyword
function myTest(){
    static $x = 0;
    echo $x . "\n";
    $x++;
}

// myTest();
// myTest();
// myTest();
// myTest();
// myTest();
