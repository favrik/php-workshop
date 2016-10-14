<?php

class TodoList {
  private $pdo;

  function __construct($pdo) {
    $this->pdo = $pdo;
  }

  function create($data) {
    if (isset($data['todo'])) {
      $stmt = $this->pdo->prepare('
        INSERT INTO todos(title, completed) VALUES(:title, :completed)'
      );
      $stmt->execute(['title' => $data['todo'], 'completed' => 0]);

      return $this->pdo->lastInsertId();
    }

    return false;
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
