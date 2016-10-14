<?php

class TodoList {
  private $pdo;

  function __construct($pdo) {
    $this->pdo = $pdo;
  }

  function create($todo) {
    $stmt = $this->pdo->prepare('
      INSERT INTO todos(title, completed) VALUES(:title, :completed)'
    );
    $stmt->execute(['title' => $todo, 'completed' => 0]);

    return $this->pdo->lastInsertId();
  }

  function get($id) {
    $stmt = $this->pdo->prepare('SELECT * FROM todos WHERE id = :id');
    $stmt->execute(['id' => $id]);
    return $stmt->fetch();
  }

  function edit($todo) {
    $stmt = $this->pdo->prepare('
      UPDATE todos
      SET title = :title, completed = :completed
      WHERE id = :id
    ');

    $stmt->execute([
      'id' => $todo['id'],
      'title' => $todo['title'],
      'completed' => isset($todo['completed']) ? 1 : 0,
    ]);

    return $stmt->rowCount();
  }

  function all() {
    return $this->pdo->query('
      SELECT id, title, IF(completed, "Sí", "No") AS completed
      FROM todos
    ');
  }

  function stats() {
    $result = $this->pdo->query('
      SELECT IF(completed, "completed", "todo") AS type, COUNT(completed) AS total
      FROM todos
      GROUP BY completed
    ');

    return $this->processStats($result);
  }

  private function processStats($result) {
    $statuses = ['completed' => 0, 'todo' => 0, 'total' => 0];
    foreach ($result as $row) {
      $statuses[$row['type']] += $row['total'];
      $statuses['total'] += $row['total'];
    }

    return $statuses;
  }
}
