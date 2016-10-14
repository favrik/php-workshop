<?php
require 'includes/db.inc.php';
require 'includes/todos.inc.php';

// Crear un objeto para interactuar con la db.
$todoList = new TodoList($pdo);

// Checar si necesitamos agregar una nueva actividad.
if (isset($_POST['todo'])) {
  if ($todoList->create($_POST['todo'])) {
    header('Location: /');
    exit;
  }
}

// Crear variables para la vista.
$title = 'Mis Actividades';
$tasks = $todoList->all();
$statuses = $todoList->stats();

require 'views/index.view.php';
