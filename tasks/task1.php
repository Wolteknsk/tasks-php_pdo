<?php
require_once '../config/database.php';

echo "<h1>Задание 1: Зарплаты пользователей</h1>";

$stmt = $pdo->query('SELECT name, salary FROM users');

echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Имя</th><th>Зарплата</th></tr>";
while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['salary'] . " руб.</td>";
    echo "</tr>";
}
echo "</table>";

echo '<br><a href="../index.php">← На главную</a>';
?>