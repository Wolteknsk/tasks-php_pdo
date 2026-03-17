CREATE DATABASE IF NOT EXISTS test_pdo 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_general_ci;

USE test_pdo;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    salary INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO users (name, age, salary) VALUES
('name1', 21, 500),
('name2', 22, 600),
('name3', 23, 600),
('name4', 24, 700),
('name5', 25, 800),
('Анна', 25, 750),
('Иван', 30, 950),
('Мария', 22, 600),
('Петр', 28, 1100),
('Елена', 24, 700),
('Василий', 32, 800);

SELECT * FROM users;