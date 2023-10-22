<?php

function sumarEnteros(int $entero1, int $entero2):  int |float
{
    return $entero1 + $entero2;
}

$resultado= sumarEnteros(2, 7.3);

// Al hacer esto nos va a dar la suma de 9 ya que estamos indicando que los valores que debe tomar son ENTEROS, por ende hace caso omiso al decimal.

// Nosotros podemos especificar que tipo de dato queremos recibir y los tipos de datos que hay son los siguientes:

// int, float, string, bool, array, object, null

echo $resultado;

?>