<?php

/*
 Problema de Suma de Números Pares:
 Crea un script que sume todos los números pares en un array de números enteros.
*/

// Función para sumar los números pares de la lista
function suma_pares($arr) {
    $suma = 0; // Variable para almacenar la suma

    // Recorremos la lista de números
    foreach ($arr as $numero) {
        // Comprobamos si el número es par
        if ($numero % 2 == 0) {
            // Sumamos el número par
            $suma += $numero;
        }
    }
    
    // Retornamos la suma total
    return $suma;
}

// Lista de numeros
$numeros = [1, 2, 3, 4, 5, 6, 7 , 8, 9, 12, 15, 18, 21, 24, 27, 30];

// LLamada a la función 
$resultado = suma_pares($numeros);
// Lista de numeros
print("\n------------ Lista de Números ------------\n " .implode(", ", $numeros) . "\n");
// Mostrando el resultado
echo "\n------ La suma de los números pares es " . $resultado . " ------\n";
?>
