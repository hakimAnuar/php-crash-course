<?php

//simple array
$number = [1,3,6,5];
$fruits = array('apple', 'pear', 'avo');

//print_r($fruits) ;
//var_dump($fruits);
//echo $fruits[1];


//Associative array
$colors = [
    1=>'red',
    2=>'blue',
    3=>'green'
];
//echo $colors[3];


$hex = [
    'red'=>'#f00',
    'blue'=>'#0f0',
    'green'=>'#00f'
];
//echo $hex['blue'];


$person = [
    'first_name'=> 'Bard',
    'last_name'=> 'Streis',
    'email'=>'bard@mail.com'
];
//echo $person['first_name'];

$people = [
    [
        'first_name'=> 'Bard',
        'last_name'=> 'Streis',
        'email'=>'bard@mail.com'
    ],
    [
        'first_name'=> 'j',
        'last_name'=> 'g',
        'email'=>'jg@mail.com'
    ],
    [
        'first_name'=> 'hg',
        'last_name'=> 's',
        'email'=>'hgs@mail.com'
    ]
];
//echo $people[2]['last_name'];
var_dump(json_encode($people));