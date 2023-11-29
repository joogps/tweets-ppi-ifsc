<link rel="stylesheet" href="form_style.css">
<form action="../model/register.php" method="post">
    <div>
        <label for="username">Nome de usuário</label>
        <input type="text" name="username" required>
    </div>
    
    <div>
        <label for="password">Senha</label>
        <input type="password" name="password" required>
    </div>
    
    <input type="submit" value="Register">
    <a href="./login_form.php"> Login </a>
</form>
