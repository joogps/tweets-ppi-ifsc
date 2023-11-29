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
                    <a href='telaEditarUsuario.php?id={$tweet['id']}'>Editar</a>
                    <a href='excluir_usuario.php?id={$tweet['id']}&op=confirma_ok'>Excluir</a>
                </div>
            </div>";
    }
?>