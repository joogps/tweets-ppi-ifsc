<?php
    include_once (__DIR__."/../model/tweet.php");
    
    $tweets = getTweets();   
    foreach ($tweets as $tweet) {
        $formattedDate = date('M j, Y \a\t g:i a', strtotime($tweet['date']));

        echo "<div class='tweet'>
                <b class='username'>@{$tweet['username']}</b>
                <p class='text'>{$tweet['text']}</p>
                <span class='date'>$formattedDate</span>
                <div class='tweet-actions'>
                    <a href='edit_tweet.php?id={$tweet['id']}'>Editar</a>
                    <a href='delete_tweet.php?id={$tweet['id']}'>Excluir</a>
                </div>
            </div>";
    }
?>