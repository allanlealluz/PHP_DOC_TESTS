<?php
$variable = 12;
define('PADARIA', 'valor');
define('variable', $variable);
echo PADARIA;
echo variable;
$x = 1;
$y = 3 * (abs(2 * $x) + 4);
$num = 1*6+5-8/2+15;
echo "<br>$num";
echo "<br>$y";
function countBy($x, $n) {
    $val = $x;$count = 1;
  $z = [];
    while($count <= $n){
      $z[]= $count;
      $count += $x;
    }
    return $z;
}
$t = countBy(2,5);
foreach($t as $v){
    echo $v;
}