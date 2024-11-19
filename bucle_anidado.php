<?php

/*
Problema de Bucle Anidado:
Escribe un programa que utilice bucles anidados 
para imprimir un patrón de asteriscos en forma de pirámide.
*/

// Función para imprimir un patrón de pirámide con bucles anidados
function imprimir_piramide($altura) {
    // Bucle principal para cada nivel de la pirámide
    for ($i = 1; $i <= $altura; $i++) {
        // Primer bucle anidado para imprimir los espacios antes de los asteriscos
        for ($j = 1; $j <= $altura - $i; $j++) {
            echo " "; // Imprime los espacios
        }

        // Segundo bucle anidado para imprimir los asteriscos
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*"; // Imprime los asteriscos
        }

        // Salto de línea al final de cada fila
        echo "\n";
    }
}

// Llamamos a la función para imprimir una pirámide de altura 7
print("\n------ Pirámide ------\n\n");
imprimir_piramide(7);
?>
