<?php
require_once('db_connection.php');

function getTweets($str = "") {
    $conn = conectar();
    $sql = "SELECT tweets.*, users.username FROM tweets JOIN users ON tweets.user_id = users.id ORDER BY tweets.date DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $tweets = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $tweets;
}

function getTweet($id) {
    $conn = conectar();
    $sql = "SELECT * FROM tweets WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $tweet = $stmt->fetch(PDO::FETCH_ASSOC);
    return $tweet;
}

function insertTweet($text, $user_id) {
    $conn = conectar();
    $sql = "INSERT INTO tweets (text, date, user_id) VALUES (:text, NOW(), :user_id)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':text', $text);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

    $stmt->execute();
    return $stmt->rowCount();
}

function updateTweet($id, $text) {
    $conn = conectar();
    $sql = "UPDATE tweets SET text = :text WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':text', $text);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    $stmt->execute();
    return $stmt->rowCount();
}

function deleteTweet($id) {
    $conn = conectar();
    $sql = "DELETE FROM tweets WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->rowCount() > 0;
}
?>
