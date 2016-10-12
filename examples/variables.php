<?php

// Todas las variables deben empezar con el signo $
$sport = 'Basquetbol';

$has_pets = false;

$pets_number = 6;

// Concatenacion e interpolacion
echo 'Mi deporte favorito es el ' . $sport . " y tengo $pets_number mascotas\n";

// Booleanos
echo 'La verdad es ' . true . "\n";

echo 'La mentira es ' . false . "\n";

$gastos = 15.39;
$ingresos = 20;

echo 'Balance: $ ' . ($ingresos - $gastos) . "\n";

// isset, empty, y var_dump
echo 'Existo? ' . isset($missing) . "\n";
echo 'Existo? ' . isset($ingresos) . "\n";


