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

$result = $pdo->query('SELECT * FROM todos');
foreach ($result as $row)
{
    echo $row['title'] . "\n";
}

$stmt = $pdo->prepare('
  SELECT IF(completed, :completed, :todo) AS type,
    count(completed) AS total
  FROM todos
  GROUP BY completed'
);
$stmt->execute(['completed' => 'completed', 'todo' => 'todo']);

$statuses = ['completed' => 0, 'todo' => 0, 'total' => 0];
while ($row = $stmt->fetch())
{
  $statuses[$row['type']] += $row['total'];
  $statuses['total'] += $row['total'];
}

print_r($statuses);


