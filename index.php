<?php

$datos = [
   [ 
    'nombre' => 'Elian Santiago Cañas',
    'email' => 'eliansa123@gmail.com',
    'celular' => '3165188961' 
   ],
   [
    'nombre' => 'David Felipe Cañas',
    'email' => 'david@gmail.com',
    'celular' => '3213292928'
   ],
   [
    'nombre' => 'Hernando Cañas',
    'email' => 'hernando@gmail.com',
    'celular' => '3156737077'
   ],
   ['nombre' => 'Luz Neida Barragan',
   'email' => 'luzneida@gmail.com',
   'celular' => '3177823944']   
];

foreach ($datos as $item) {
    echo $item['nombre'] . "<br>";
    echo $item['email'] . "<br>";
    echo $item['celular'] . "<br>";
    
    echo "<hr>";

}

// Arrays multidimensionales, se pueden poner uno dentro de otro.

?>