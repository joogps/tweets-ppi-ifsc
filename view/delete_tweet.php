<?php 
    include_once(__DIR__."/../model/tweet.php");
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == "GET") {
        $id = $_GET['id'];
        if (deleteTweet($id)) {
            header("Location: ../view/tweets.php");
        } else {
            echo "Erro ao deletar o tweet";
        }
    } 
?>