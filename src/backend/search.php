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

// Перевірка наявності запиту
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Підготовка запиту
$sql = "SELECT * FROM revenue_accounts WHERE budget_classification_code LIKE ? OR tax_name LIKE ?";
$stmt = $conn->prepare($sql);
$searchTerm = "%$query%";
$stmt->bind_param("ss", $searchTerm, $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

// Перевірка та виведення результатів
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Населений пункт</th>
                <th>Отримувач</th>
                <th>Код отримувача (ЄДРПОУ)</th>
                <th>Банк отримувача</th>
                <th>Номер рахунку</th>
                <th>Код класифікації доходів бюджету</th>
                <th>Найменування податку/збору/платежу</th>
                <th>Наявність відомчої ознаки</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row["settlement"]) . "</td>
                <td>" . htmlspecialchars($row["recipient"]) . "</td>
                <td>" . htmlspecialchars($row["recipient_code"]) . "</td>
                <td>" . htmlspecialchars($row["recipient_bank"]) . "</td>
                <td>" . htmlspecialchars($row["account_number"]) . "</td>
                <td>" . htmlspecialchars($row["budget_classification_code"]) . "</td>
                <td>" . htmlspecialchars($row["tax_name"]) . "</td>
                <td>" . htmlspecialchars($row["departmental_sign"]) . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Результатів не знайдено.";
}

// Закриття підключення
$stmt->close();
$conn->close();
?>
