<?php 
$rand = rand(1,6);

if($rand <= 3 && $rand != 3){
    echo 'Deve ser 1 ou 2';
}elseif($rand == 5 || $rand == 6){
    echo "Não é 4";
}else{
    echo 'É 3 ou 4';
}
?> <br> <?php
echo "\n \r\n".$rand;
$y = 0; 
$x = 10;
if ($y-- == 0) echo "epa".$y;
if (++$x == 10) echo $x;
?> </br>
<?php 
echo "a php text
with several espaces


and otherwise a 
autor face";

echo <<<_END

a php text
with several espaces


and otherwise a 
autor face

_END;