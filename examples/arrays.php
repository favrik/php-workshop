<?php

// Arrays / Arreglos

// inicializacion
$lista_de_compras = [];

// inicializacion con valores predeterminados
$lista_de_compras = ['mantequilla', 'pescado', 'calabaza', 'zanahoria'];

// agregar un elemento a un arreglo existente
$lista_de_compras[] = 'tomate';

// Acceso a elementos especificos del arreglo
echo $lista_de_compras[1] . "\n";

// Contar elementos
echo count($lista_de_compras) . "\n";

// Eliminar elementos
print_r($lista_de_compras); // Antes
unset($lista_de_compras[2]);
print_r($lista_de_compras); // Despues

