<?php

function valoracion($nombre, $rating = 5) {
    echo "El $nombre tiene un rating de $rating";
}


//Cuando algun parametro es opcional y queremos tener uno por defecto esto es lo que podemos hacer.

function concatenar(...$palabras) {
    $resultado = "";
    foreach($palabras as $palabra) {
        
        $resultado .= $palabra . " ";

    }
    echo $resultado;
}

concatenar('Curso', 'PHP', '8','Desde', 'Cero');

//Esto se puede hacer cuando no sabemos cuantos parametros vamos a necesitar en una funcion, al poner ...$palabras, todos los parametros que pongamos se guardaran en un array. 

?>