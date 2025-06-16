<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Подключение к базе данных
    $servername = "localhost";  // Ваш сервер базы данных
    $username = "root";         // Ваше имя пользователя для базы данных
    $password = "";             // Ваш пароль для базы данных
    $dbname = "contact_form";   // Название вашей базы данных

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Санитарная обработка и валидация входных данных
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST['subject']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Подготовка SQL-запроса
    $sql = "INSERT INTO submissions (name, email, subject, phone, message)
            VALUES ('$name', '$email', '$subject', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Новая запись успешно добавлена";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
