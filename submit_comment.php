<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $website = '';
    $message = $_POST['message'] ?? '';

    $stmt = $pdo->prepare("INSERT INTO comments (name, email, message) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $message]);


    header("Location: single.php");
    exit;
}
?>