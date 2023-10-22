<?php

$a = 5;
$b = 10;


function test($n){
    $n = $n + 10; 
}
//Cuando pasamos asi las variables se dice que estamos pasando parametros por valor 
//Cuando queremos pasarle la variable completa para que ejecute la funcion correctamente necesitamos poner el signo &  

test($a);
test($b);

echo $a . "<br>";
echo $b;

?>