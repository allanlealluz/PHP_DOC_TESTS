<?php
function getArray() {
    return array(1, 2, 3);
}
$source_array = ['foo', 'bar', 'baz'];
$thing = [1,2,3,4,5,6,7];
[$a,$b,$c,$d,$e,$f] = $thing;
[$foo, $bar, $baz] = $source_array;
$t = (object) array('1' => 'foo');
var_dump(isset($t->{'1'}));
$obj = (object) 'paneladepressao';
echo $obj->scalar;  // outputs 'ciao'
var_dump($obj);
/*
echo $a;
echo $b;
echo $c;
echo $d;
echo $e;
echo $f;
echo $foo;    // prints "foo"
echo $bar;    // prints "bar"
echo $baz;  

*/
?>