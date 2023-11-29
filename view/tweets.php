<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: view/login_form.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tweets</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
    <h2>Tweets</h2>
    <h3>Olá, <?php echo $_SESSION['username']; ?>!</h3>
    <form class="tweet-form" action="make_tweet.php" method="post">
        <textarea name="text" placeholder="O que está acontecendo?" type="text" name="tweet" class="tweet-field"></textarea>
        <input class="tweet-button" value="Tweetar" type="submit">
    </form>
    <div class="tweet-list">
    <?php   include_once("list_tweets.php"); ?>
</div>
    </div>
</body>
</html>