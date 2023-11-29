<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form action="../actions/register.php" method="post" class="tweet-login-form">
        <h2> Registrar </h2>
        <label for="username">Nome de usuário</label>
        <input type="text" name="username" required>

        <label for="password">Senha</label>
        <input type="password" name="password" required>
        
        <div style="float: center">
        <input class="tweet-button" type="submit" value="Registrar">
        <a href="login.php" class="tweet-link"> Login </a>
        </div>
    </form>
</body>
</html>