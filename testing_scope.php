<?php
require_once "tests3.php";
 global $quebola;
global $link_bam;
$link_bam = "https://pixai.art/artwork/1685526042515946867/relevant";
 $quebola = 1;

 function padareiro (){
    $quebola = 2;
    echo $quebola;
 }
$max = 10;
$min = 1;

function test(){
    static $count = 0;
    echo $count;
    $count ++;
 }

while($min <= $max){
    test();
    $min++;
}
static $pd = 1+3+9+52;
?> <br>
<?php echo $pd,$hg ?></br><?php ;
var_dump($_SERVER['HTTP_REFERER']);
 echo PADARIA;
 padareiro();