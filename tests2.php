<?php 

$array = [
    'a',
    'b',
    6 => 'c',
    'd'
];

$array2 = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    '1.5' => 'd',
    TRUE => 'e'
]; 
echo 'Today is '. date('l')." \n ";
var_dump($array);
var_dump($array2);