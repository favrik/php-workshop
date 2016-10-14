<?php

require 'includes/db.inc.php';
require 'includes/todos.inc.php';

// Crear un objeto para interactuar con la db.
$todoList = new TodoList($pdo);

// Ver si necesitamos agregar una nueva actividad.
if (!empty($_POST)) {
  if ($todoList->create($_POST)) {
    header('Location: /');
    exit;
  }
}

// Crear variables para la vista.
$title = 'Mis Actividades';
$tasks = $todoList->all();
$statuses = $todoList->stats();

require 'views/index.view.php';
