<?php
require_once '../config/database.php';

$name1 = 'name1';
$name2 = 'name2';

echo "<h1>Задание 7: Пользователи с именами '$name1' или '$name2'</h1>";

$sql = "SELECT * FROM users WHERE name IN (:name1, :name2)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['name1' => $name1, 'name2' => $name2]);

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