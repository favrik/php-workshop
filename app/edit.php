<?php

require 'includes/db.inc.php';
require 'includes/todos.inc.php';

// Crear un objeto para interactuar con la db.
$todoList = new TodoList($pdo);

// Checar si hay que guardar cambios
if (isset($_POST['id'])) {
  if ($todoList->edit($_POST)) {
    header('Location: /');
    exit;
  }
}

// Crear variables para la vista.
$title = 'Mis Actividades';
$include_edit_view = isset($_GET['id']);
$edit_todo = $todoList->get($_GET['id']);

require 'views/edit.view.php';
