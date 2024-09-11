<?php
$servername="localhost";
$username="root";
$password="nyshtairyna2004";
$dbname="tax_info";

$conn=new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Підключення не вдалось!" . $conn->connect_error);
}

$sql = "CREATE TABLE revenue_accounts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    settlement VARCHAR(255) NOT NULL,               -- Населений пункт
    recipient VARCHAR(255) NOT NULL,                -- Отримувач
    recipient_code VARCHAR(12) NOT NULL,            -- Код отримувача (ЄДРПОУ)
    recipient_bank VARCHAR(255) NOT NULL,           -- Банк отримувача
    account_number VARCHAR(34) NOT NULL,            -- Номер рахунку
    budget_classification_code VARCHAR(20) NOT NULL,-- Код класифікації доходів бюджету
    tax_name VARCHAR(255) NOT NULL,                 -- Найменування податку/збору/платежу
    departmental_sign VARCHAR(50) NOT NULL          -- Наявність відомчої ознаки (може бути текст)
)";

if ($conn->query($sql) === TRUE){
    echo "Таблиця успішно створена";
} else{
    echo "Помилка створення";
}

$conn->close();
?>


