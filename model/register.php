<?php
session_start();
require_once('db_connection.php');

$conn = conectar();

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);

$stmt->execute();

$message = "";

if ($stmt->rowCount()) {
    $_SESSION['user_id'] = $conn->lastInsertId();
    $_SESSION['username'] = $username;

    $message = "Seja bem vindo, $username!";
} else {
    $message = "Registro falhou. For favor tente novamente.";
}

$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= stylesheet href="../css/style.css">
    <title>Registro</title>
</head>
<body>
    <div class="container">
        <h2><?php echo $message; ?></h2>
        <a href="../view/tweets.php">Tela inicial</a>
    </div>
</body>
</html>