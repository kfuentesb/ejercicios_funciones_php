<?php // src/functions.php

/**
 * Esa línea activa el modo de comprobación estricta de tipos (strict typing) en PHP.
Se coloca al principio del archivo y le dice al intérprete que debe respetar exactamente los tipos de datos indicados en las funciones.
 */
//declare(strict_types=1);

function media($numeros = [1,9,12]) {
    $suma = array_sum($numeros);
    $media = $suma / count($numeros);

    return $media;
}

function potencia($base, $exp){
    return pow($base, $exp);   
}

function contar_palabras($texto){
    $cantidad = str_word_count($texto);
    return $cantidad;
}

function sumar($numeros) {
    return array_sum($numeros);
}

function buscar_palabra($palabra, $texto) {
    $posicion = strpos($texto, $palabra);

    if ($posicion === false) {
        return "La palabra no se encontró.";
    } else {
        return "La palabra se encontró en la posición: " . $posicion;
    }
}
