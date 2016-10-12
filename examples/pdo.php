<?php

// Crear una conexion
$host = 'localhost';
$db   = 'prod_latest';
$user = 'root';
$pass = 'k';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $opt);


// Ejecutar una query
$result = $pdo->query('SELECT name FROM commerce_promotion');
foreach ($result as $row)
{
    echo $row['name'] . "\n";
}

// Ejecutar una query con parametros
$stmt = $pdo->prepare('SELECT * FROM commerce_promotion WHERE name = :name');
$stmt->execute(['name' => 'REBOTED']);
$promo = $stmt->fetchAll();
print_r($promo);

// INSERT
$statement = $link->prepare("INSERT INTO testtable(name, lastname, age)
    VALUES(:fname, :sname, :age)");
$statement->execute(array(
    "fname" => "Bob",
    "sname" => "Desaunois",
    "age" => "18"
));


// UPDATE
$sql = "UPDATE users SET name = ? WHERE id = ?";
$pdo->prepare($sql)->execute([$name, $id]);

// DELETE
$stmt = $pdo->prepare("DELETE FROM goods WHERE category = ?");
$stmt->execute([$cat]);
$deleted = $stmt->fetchColumn();

