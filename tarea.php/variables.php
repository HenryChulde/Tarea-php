<?php
// a. Declaración de Variables
$entero = 10;                   // integer
$decimal = 8.12;                // float
$cadena = "Hola, Uniandes!";       // string
$booleano = true;               // boolean
$array = array("manzana", "sandia", "zapote", "naranja", "ovo"); // array

// b. Operaciones Aritméticas
$suma = $entero + $decimal;     // Suma de un integer y un float
$producto = $entero * $decimal; // Multiplicación de un integer y un float

// Mostrar resultados de las operaciones aritméticas
echo "La suma de $entero y $decimal es: $suma<br>";
echo "El producto de $entero y $decimal es: $producto<br>";

// c. Manipulación de Cadenas
$cadena2 = " ¿Cómo estás?";      // Segunda cadena
$cadenaConcatenada = $cadena . $cadena2; // Concatenación de dos cadenas
$longitudCadena = strlen($cadenaConcatenada); // Longitud de la cadena concatenada

// Mostrar resultados de la manipulación de cadenas
echo "La cadena concatenada es: $cadenaConcatenada<br>";
echo "La longitud de la cadena concatenada es: $longitudCadena<br>";

// d. Uso de Condicionales
if ($booleano) {
    echo "La variable booleana es verdadera.<br>";
} else {
    echo "La variable booleana es falsa.<br>";
}

// e. Creación de un Array
$elemento = $array[2]; // Obtener el elemento en el índice 2

// Mostrar un elemento específico del array
echo "El elemento en el índice 2 del arreglo es: $elemento<br>";
?>
