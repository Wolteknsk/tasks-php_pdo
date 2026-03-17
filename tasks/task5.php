<?php
require_once '../config/database.php';

$age = 25;

echo "<h1>Задание 5: Пользователи с возрастом $age</h1>";

$sql = "SELECT * FROM users WHERE age = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$age]);

echo "<table border='1' cellpadding='5'>";
echo "<tr><th>ID</th><th>Имя</th><th>Возраст</th><th>Зарплата</th></tr>";
while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['salary'] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo '<br><a href="../index.php">← На главную</a>';
?>