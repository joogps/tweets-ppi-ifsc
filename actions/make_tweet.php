<?php
    session_start();
    require_once('../model/tweet.php');

    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == "POST") {
        $text = $_POST['text'];
        $userId = $_SESSION['user_id'];

        if (insertTweet($text, $userId)) {
            header("Location: ../view/tweets.php");
        } else {
            echo "Erro ao tweetar";
        }
    } 
?>