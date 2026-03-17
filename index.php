<?php
require_once 'config/database.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP PDO Задания</title>
</head>
<body> 
    <h2>Подключение к БД успешно!</h2>
    
    <h2>Данные в таблице users:</h2>
    <?php
    $stmt = $pdo->query("SELECT * FROM users");
    $users = $stmt->fetchAll();
    
    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>ID</th><th>Имя</th><th>Возраст</th><th>Зарплата</th></tr>";
    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>" . $user['id'] . "</td>";
        echo "<td>" . $user['name'] . "</td>";
        echo "<td>" . $user['age'] . "</td>";
        echo "<td>" . $user['salary'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    
    <h2>Список заданий:</h2>
    <ul>
        <li><a href="tasks/task1.php">Задание 1 - Зарплаты пользователей</a></li>
        <li><a href="tasks/task2.php">Задание 2 - Имя: возраст</a></li>
        <li><a href="tasks/task3.php">Задание 3 - Поиск по возрасту ИЛИ зарплате</a></li>
        <li><a href="tasks/task4.php">Задание 4 - Защита от SQL-инъекций</a></li>
        <li><a href="tasks/task5.php">Задание 5 - Поиск по возрасту</a></li>
        <li><a href="tasks/task6.php">Задание 6 - Поиск в диапазоне возрастов</a></li>
        <li><a href="tasks/task7.php">Задание 7 - Поиск по нескольким именам</a></li>
        <li><a href="tasks/task8.php">Задание 8 - Все возраста пользователей</a></li>
        <li><a href="tasks/task9.php">Задание 9 - Имя и возраст как ключ-значение</a></li>
    </ul>
    
</body>
</html>