<?php

/*
 Problema de Lista Invertida:
 Escribe un programa que tome un array de números y devuelva una nueva lista 
 que contenga los mismos elementos en orden inverso. 
*/

// Función que invierte la lista de números
function invertir_lista($arr) {
    // Usamos la función array_reverse para invertir la lista
    return array_reverse($arr);
}

// Lista de números
$numeros = [2, 4, 6, 8, 10];

// Llamada a la función para invertir la lista
$numeros_invertidos = invertir_lista($numeros);

// Mostrando la lista invertida
print("\n------ Lista Original ------ "  .implode(", ", $numeros) . "\n");
print("------ Lista Invertida ------ " .implode(", ", $numeros_invertidos) . "\n");

// Imprimiendo Array Original
print("\n------ Array Original ------ ");
print_r($numeros);

// Imprimiendo Array Invertido
print("\n------ Array Invertido ------ ");
print_r($numeros_invertidos);
?>
