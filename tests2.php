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
echo 'Today is '. date('l')." \n pão de queijo";
var_dump($array);
var_dump($array2);

$Number = 1;
while($Number <= 20){
    echo "\n".$Number."\n";
    $Number += 2;   
}