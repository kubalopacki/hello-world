<?php

$pdo = new PDO('mysql:host=localhost;dbname=_hello;charset=utf8', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->query('SELECT * FROM products');
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($products as $product) {
    echo $product['name'] . ': ' . $product['price'] . PHP_EOL;
}
$stmt->closeCursor();

