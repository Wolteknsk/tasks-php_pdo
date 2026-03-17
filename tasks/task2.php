<?php
require_once '../config/database.php';

echo "<h1>Задание 2: Имя и возраст</h1>";

$stmt = $pdo->query('SELECT name, age FROM users');

echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Имя</th><th>Возраст</th></tr>";
while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['age'] . " лет</td>";
    echo "</tr>";
}
echo "</table>";

echo '<br><a href="../index.php">← На главную</a>';
?>