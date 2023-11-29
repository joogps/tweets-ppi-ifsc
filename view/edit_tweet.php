<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

require_once('../model/tweet.php');

$tweet_id = $_GET['id'];
$tweet = getTweet($tweet_id);

if (!$tweet) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tweet</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Editar Tweet</h2>
        <form class="tweet-form" action="/actions/edit_tweet.php" method="post">
            <input type="hidden" name="tweet_id" value="<?php echo $tweet_id; ?>">
            <textarea name="text" placeholder="Edite o seu Tweet..." class="tweet-field"><?php echo $tweet['text']; ?></textarea>
            <input class="tweet-button" value="Salvar" type="submit">
        </form>
    </div>
</body>
</html>
