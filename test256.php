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
?> </br>