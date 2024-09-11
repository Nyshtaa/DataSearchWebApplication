<?php
$servername = "localhost";
$username = "root";
$password = "nyshtairyna2004";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Підключення не вдалось(" . $conn->connect_error);
}

$sql = "CREATE DATABASE tax_info";
if($conn->query($sql) === TRUE){
    echo "База даних створена успішно!";
}
else{
    echo "Помилка створення бази даних" . $conn->error;
}

$conn->close();
?>
