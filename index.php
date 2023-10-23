<?php

// $array = [1, 2, 3];

// list($a, $b, $c) = $array;

// echo $b . "<br>";

// $array2= range(10,20);

// var_dump($array2);
// echo count($array2);

$array = ['Victor', 'Pamela', 'Elizabeth', 'Iris'];

unset($array[2]);
// unset sirve para borrar un elemento del array

if (in_array('Elizabeth', $array)) {
    echo "El valor buscado se encuentra dentro de la lista";
} else {
    echo "El valor buscado NO se encuentra dentro de la lista";
}

