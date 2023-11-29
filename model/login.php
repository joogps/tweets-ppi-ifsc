<?php
session_start();
require_once('db_connection.php');

$conn = conectar();

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT id, password FROM users WHERE username = :username";
$stmt = $conn->prepare($query);
$stmt->bindParam(':username', $username);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $username;

    header("Location: ../view/tweets.php");
} else {
    echo "Nome de usuário ou senha inválidos. Por favor, tente novamente.";
}

$conn = null;
?>
