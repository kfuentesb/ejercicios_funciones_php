<?php

require_once __DIR__ . '/funciones.php';

echo "Resultado de sumar(5,3): " . sumar(5, 3) . "<br>" . "\n";
echo "Resultado de sumar(1,8): " . sumar2(1,8) . "<br>" . "\n";
echo "Uso la function saludar cambiando el string: " . saludar("Kevin", "Buenos días") . "\n";           
echo "Uso la function saludar usando por defecto: " . saludar("Kevin");   
echo "Mostrar array: " . (stats($my_array(5,1,2)));

?>