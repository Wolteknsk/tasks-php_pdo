<?php
require_once '../config/database.php';

echo "<h1>Задание 9: Имя и возраст</h1>";

$stmt = $pdo->query('SELECT name, age FROM users');
$users = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);

echo "<pre>";
print_r($users);
echo "</pre>";

echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Имя (ключ)</th><th>Возраст (значение)</th></tr>";
foreach ($users as $name => $age) {
    echo "<tr>";
    echo "<td>" . $name . "</td>";
    echo "<td>" . $age . "</td>";
    echo "</tr>";
}
echo "</table>";

echo '<br><a href="../index.php">← На главную</a>';
?>