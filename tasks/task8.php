<?php
require_once '../config/database.php';

echo "<h1>Задание 8: Все возраста пользователей</h1>";

$stmt = $pdo->query('SELECT age FROM users');
$ages = $stmt->fetchAll(PDO::FETCH_COLUMN);

echo "<p><strong>Возраста:</strong> " . implode(', ', $ages) . "</p>";
echo "<p><strong>Всего записей:</strong> " . count($ages) . "</p>";
echo "<p><strong>Уникальные возраста:</strong> " . count(array_unique($ages)) . "</p>";

echo '<br><a href="../index.php">← На главную</a>';
?>