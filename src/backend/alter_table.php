<?php
$servername = "localhost";
$username = "root";
$password = "nyshtairyna2004";
$dbname = "tax_info";

// Створення підключення
$conn = new mysqli($servername, $username, $password, $dbname);

// Перевірка підключення
if ($conn->connect_error) {
    die("Підключення не вдалося: " . $conn->connect_error);
}

// Запит для зміни структури таблиці
$sql = "ALTER TABLE revenue_accounts MODIFY departmental_sign VARCHAR(50)";

if ($conn->query($sql) === TRUE) {
    echo "Структура таблиці успішно змінена";
} else {
    echo "Помилка зміни структури таблиці: " . $conn->error;
}

// Закриття підключення
$conn->close();
?>
