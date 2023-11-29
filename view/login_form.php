<link rel="stylesheet" href="form_style.css">
<form action="login.php" method="post">
    <div>
        <label for="username">Nome de usuário</label>
        <input type="text" name="username" required>
    </div>
    
    <div>
        <label for="password">Senha</label>
        <input type="password" name="password" required>
    </div>
    
    <input type="submit" value="Login">
    <a href="./registration_form.php"> Registrar </a>
</form>
