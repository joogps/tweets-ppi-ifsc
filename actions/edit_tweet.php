<?php
    require_once('../model/tweet.php');

    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == "POST") {
        $tweetId = $_POST['tweet_id'];
        $text = $_POST['text'];

        if (updateTweet($tweetId, $text)) {
            header("Location: ../view/tweets.php");
        } else {
            echo "Erro ao editar tweet";
        }
    } 
?>