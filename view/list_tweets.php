<?php
session_start();

$userId = $_SESSION['user_id'];

include_once (__DIR__."/../model/tweet.php");

$tweets = getTweets($query);   
foreach ($tweets as $tweet) {
    $formattedDate = date('d/m/y \à\s h:m', strtotime($tweet['date']));

    echo "<div class='tweet'>
            <b class='username'>@{$tweet['username']}</b>
            <p class='text'>{$tweet['text']}</p>
            <span class='date'>$formattedDate</span>";

    if ($userId == $tweet['user_id']) {
        echo "<div class='tweet-actions'>
                <a href='/view/edit_tweet.php?id={$tweet['id']}'>Editar</a>
                <a href='/actions/delete_tweet.php?id={$tweet['id']}'>Excluir</a>
              </div>";
    }

    echo "</div>";
}
?>
