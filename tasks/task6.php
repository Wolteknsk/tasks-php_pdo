<?php
require_once '../config/database.php';

$age1 = 20;
$age2 = 30;

echo "<h1>Задание 6: Пользователи с возрастом от $age1 до $age2</h1>";

$sql = "SELECT * FROM users WHERE age BETWEEN :age1 AND :age2";
$stmt = $pdo->prepare($sql);
$stmt->execute(['age1' => $age1, 'age2' => $age2]);

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