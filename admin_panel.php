<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$sql = "SELECT * FROM submissions ORDER BY date DESC";
$result = $conn->query($sql);

echo "<h1>Заявки с контактной формы</h1>";
echo "<table border='1'><tr><th>ID</th><th>Имя</th><th>Email</th><th>Тема</th><th>Телефон</th><th>Сообщение</th><th>Дата</th></tr>";

if ($result->num_rows > 0) {
    // Вывод данных каждой строки
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["subject"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["message"] . "</td><td>" . $row["date"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Нет записей";
}

$conn->close();
?>
