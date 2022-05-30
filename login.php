<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="entrar.php" method="post">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" autocomplete="off">
        <br><br>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" autocomplete="off">
        <br><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>