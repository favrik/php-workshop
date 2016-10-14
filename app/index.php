<?php

require 'includes/db.inc.php';
require 'includes/todos.inc.php';

$title = 'Mis Actividades';

$todoList = new TodoList($pdo);
$tasks = $todoList->all();
$statuses = $todoList->stats();

require 'views/index.view.php';
