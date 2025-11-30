<?php

require_once __DIR__ . '/funciones_b.php';

echo "La media es: " . media() . "\n";
echo "Potencia: " . potencia(5, 2) . "\n";

$frase = "Hola, ¿qué haces?";
echo "Cantidad de palabras: " . contar_palabras($frase) . "\n";
echo sumar(5, 10, 3) . "\n";
echo buscar_palabra("mundo", "Hola mundo!");  
?>