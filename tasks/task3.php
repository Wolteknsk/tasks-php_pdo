<?php
require_once '../config/database.php';

$age = 23;
$salary = 700;

echo "<h1>Задание 3: Поиск по возрасту ИЛИ зарплате</h1>";
echo "<p><strong>Параметры:</strong> возраст = $age ИЛИ зарплата = $salary</p>";

$sql = "SELECT * FROM users WHERE age = :age OR salary = :salary";
$stmt = $pdo->prepare($sql);
$stmt->execute(['age' => $age, 'salary' => $salary]);

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