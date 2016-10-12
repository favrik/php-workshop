<?php

if (true) {
  echo 'Es verdad' . "\n";
}

if (false) {
  echo 'Es mentira'. "\n";
}

if (false) {
  echo 'Es mentira'. "\n";

} else {
  echo 'Es verdad' . "\n";
}

// comparadores > >= < <= != == !== ===
$tu_mascota = 'dog';
$mi_mascota = 'dog';

if ($tu_mascota == $mi_mascota) {
  echo 'Tenemos la misma mascota' . "\n";
}

$edad = 10;

// operadores logicos && || !
// tablas de verdad
$edad = 18;
$id = false;
$canas = true;

if ($edad >= 18 && $id) {
  echo 'Puedes entrar al bar' . "\n";
}

if ($id || $canas) {
  echo 'Tambien puedes entrar al bar' . "\n";
}

if (!$id) {
  echo 'No puedes entrar' . "\n";
}

// Anidacion de condiciones y elseif
if (true) {
  if (false) {
  }

} elseif ($superman) {

} else {
  if ($clase == 'math') {
    if ($tema == 'calculo') {

    }
  } else {

  }
}
