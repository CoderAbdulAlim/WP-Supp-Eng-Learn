<?php

// $namea = array('Polash', 'Mehedee', 'Sunny', 'Shakit');
// $names = ['Polash', 'Mehedee', 'Sunny', 'Shakit'];

// $names = [
//     'name' => 'Polash',
//     'email' => 'polash@gmail.com'
// ];

// $users = [
//     [
//         'name' => 'Polash',
//         'email' => 'polash@gmail.com'
//     ],
//     [
//         'name' => 'Mehedi',
//         'email' => 'mehedi@gmail.com',
//         'likes' => ['php', 'laravel']
//     ]
// ];

// echo $names;
// var_dump ($names);
// var_dump ($users);

// echo $names[0];
// echo $names['name'];
// echo $users[1]['likes'][1];

// echo count($users);

// array type index, associative array and multi-dimenstion

// $numbers = [1, 2, 3, 4, 5, 5, 6, 7, 8, 9, 1, 2,];

// var_dump(array_count_values($numbers));
// echo sizeof($numbers);

// $numbers = [1, 2, 3, 4, 5, 5, 6, 7, 8, 9, 1, 2,];

// for ($i = 0; $i < count($numbers); $i++){
//     echo $numbers[$i] . PHP_EOL;
// }

// foreach ($numbers as $number) {
//     echo $number . PHP_EOL;
// }


// $names = [
//     ['a', 'b', 'c'],
//     ['d', 'e', 'f', 'g'],
//     ['h', 'i', 'j', 'k', 'l']
// ];

// // var_dump($names);

// foreach ($names as $parentKey => $parentValue){
//     // echo $parentKey . ' : ' . $parentValue . PHP_EOL;
//     foreach ($parentValue as $childKey => $childValue){
//         echo $parentKey . ' > ' . $childKey . ' > ' . $childValue . PHP_EOL;
//     }
// }

$peoples = [
    [
        'id' => 1,
        'name' => 'Jone',
        'email' => 'johe@email.com',
        'likes' => [
            'php', 'laravel'
        ]
    ],
    [
        'id' => 2,
        'name' => 'Mone',
        'email' => 'mohe@email.com',
        'likes' => [
            'php', 'laravel'
        ]
    ],
    [
        'id' => 3,
        'name' => 'Rone',
        'email' => 'rohe@email.com',
        'likes' => [
            'php', 'laravel'
        ]
    ]
];

// foreach ($peoples as $parentKey => $parentValue){
//     foreach ($parentValue as $childKey => $childValue){
//         echo $parentKey . ' > ' . $childKey . ' > ' . $childValue . PHP_EOL;
//     }
// }

// foreach ($peoples as $people) {
//     // echo $people['name'] . PHP_EOL;
//     echo $people['name'] . ' > ' . $people['email'] . PHP_EOL;
// }

// foreach ($peoples as $people) {
//     echo $people['name'] . PHP_EOL;
//     foreach ($people['likes'] as $like){
//         // echo $like . ',';
//         echo implode(', ', $like);
//     }
//     echo PHP_EOL;
// }

// $abc = ['a', 'b', 'c'];

// echo implode(', ', $abc);


$status = [
    ['text' => 'What a lovely day!'],
    ['text' => 'Have a nice day!'],
    'status' => 200
];

// // var_dump($status);
// foreach ($status as $statusa) {
//     echo $statusa['text'] . PHP_EOL;
// }

// foreach ($status as $key => $value) {
//     echo $value['text'] . PHP_EOL;
// }

// foreach ($status as $key => $value) {
//     if (is_array($value)) {
//         echo $value['text'] . PHP_EOL;
//     }
// }

// foreach ($status as $key => $value) {
//     // if (is_array($value)) {
//     //     echo $value['text'] . PHP_EOL;
//     // }

//     // if($key !== 'status'){
//     //     echo $value['text'] . PHP_EOL;
//     // }

//     if ($key === 'status') {
//         continue;
//     }
//     echo $value['text'] . PHP_EOL;
// }

$peoples = [
    [
        'id' => 1,
        'name' => 'Jone'
    ],
    [
        'id' => 2,
        'name' => 'Rone'
    ],

    [
        'id' => 3,
        'name' => 'Pone'
    ]
];
// $toFind = 'Kone';
// // $found = [];
// $found = false;

// foreach ($peoples as $people) {
//     if ($people['name'] === $toFind) {
//         $found = $people;
//     }
// }

// if(!$found){
//     echo 'Not Found.';
// }

// var_dump($found);

// foreach ($peoples as $people) {
//     $people['name'] = 'abcd';

//     // var_dump($people);
// }

// var_dump($peoples);

// foreach ($peoples as &$people) {
//     $people['name'] = 'abcd';

//     // var_dump($people);
// }

// var_dump($peoples);

// $numbersA = [1, 2, 3, 4, 5];

// var_dump($numbersA);

// foreach ($numbersA as &$numberA) {
//     $numberA *= 2;
//     unset($numberA);
// }

// var_dump($numbersA); //I have face no problem like 8 and 8

// foreach ($numbersA as $numberA) {
//     echo $numberA  . PHP_EOL;
// }

$numbersA = [6, 7, 8, 9, 10];

var_dump($numbersA);

foreach ($numbersA as &$numberA) {
    $numberA *= 2;
    unset($numberA);
}

var_dump($numbersA); //I have face no problem like 8 and 8

foreach ($numbersA as $numberA) {
    echo $numberA  . PHP_EOL;
}