<?php

$pdo_opt = [
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO(
  'mysql:host=localhost;dbname=todos;charset=utf8',
  'root',
  'k',
  $pdo_opt
);
