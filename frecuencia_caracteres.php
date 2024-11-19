<?php
/*
Problema de Frecuencia de Caracteres:
Implementa una función que tome una cadena de texto y devuelva un array asociativo 
que muestre la frecuencia de cada carácter en la cadena.
*/

// Definiendo la clase Nodo del Árbol Binario de Búsqueda
class Nodo {
    public $caracter;
    public $frecuencia;
    public $izquierda;
    public $derecha;

    // Constructor
    public function __construct($caracter) {
        $this->caracter = $caracter;
        $this->frecuencia = 1;  // Inicializamos la frecuencia en 1
        $this->izquierda = null;
        $this->derecha = null;
    }
}

// Insertamos un carácter en el árbol
function insertar_en_arbol($raiz, $caracter) {
    // Si el árbol está vacío, creamos un nuevo nodo
    if ($raiz == null) {
        return new Nodo($caracter);
    }

    // Si el carácter ya está en el árbol, incrementamos la frecuencia
    if ($caracter == $raiz->caracter) {
        $raiz->frecuencia++;
    } else if ($caracter < $raiz->caracter) {
        $raiz->izquierda = insertar_en_arbol($raiz->izquierda, $caracter);
    } else {
        $raiz->derecha = insertar_en_arbol($raiz->derecha, $caracter);
    }

    return $raiz;
}

// Recorremos en orden el árbol y mostramos las frecuencias
function mostrar_frecuencias($raiz) {
    if ($raiz != null) {
        mostrar_frecuencias($raiz->izquierda);
        echo "Carácter: " . $raiz->caracter . " - Frecuencia: " . $raiz->frecuencia . "\n";
        mostrar_frecuencias($raiz->derecha);
    }
}

// Función principal que toma la cadena y devuelve el árbol con las frecuencias
function frecuencia_caracteres($cadena) {
    $raiz = null;

    // Recorremos cada carácter de la cadena
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];
        // Insertamos cada carácter en el árbol
        $raiz = insertar_en_arbol($raiz, $caracter);
    }

    return $raiz;
}

// Cadena de texto
$texto = "abracadabrapatasdecabra";

// Llamamos a la función frecuencia_caracteres
$raiz = frecuencia_caracteres($texto);
//Impresion de los resultados
print("\n------ Resultados ------ ");
print("\nTexto: " . $texto . "\n");
mostrar_frecuencias($raiz);
?>
