<?php
require_once '../config/database.php';

$malicious_input = "30 OR 1=1";

echo "<h1>Задание 4: Защита от SQL-инъекций</h1>";
echo "<h3>Попытка инъекции: " . htmlspecialchars($malicious_input) . "</h3>";

echo "<h4>Опасный код:</h4>";
echo "<pre>";
echo "\$sql = \"SELECT * FROM users WHERE age = $malicious_input\";<br>";
echo "</pre>";

echo "<h4>Безопасный код с PDO:</h4>";
$sql = "SELECT * FROM users WHERE age = :age";
$stmt = $pdo->prepare($sql);
$stmt->execute(['age' => $malicious_input]);

$result = $stmt->fetchAll();

if (empty($result)) {
    echo "<p style='color: green;'>Инъекция не удалась PDO защитил базу данных</p>";
    echo "<p>Значение '" . htmlspecialchars($malicious_input) . "' было воспринято как строка</p>";
} else {
    echo "<p style='color: red;'>Уязвимость обнаружена</p>";
}

echo '<br><a href="../index.php">← На главную</a>';
?>