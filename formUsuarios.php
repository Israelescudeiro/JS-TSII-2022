<?php 
require 'controleDeAcesso.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h5>CRUD Usuários</h5>
    <div>
        <form action="gravaUsuario.php" method="post">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
            <br>
            <label for="nome">Senha</label>
            <input type="password" name="senha" id="senha">
            <br>
            <label for="nome">Confirme a Senha</label>
            <input type="password" name="confirmacao_senha" id="confirmacao_senha">
            <br>
            <input type="submit" value="Gravar">
        </form>
    </div>
    <div>
        <a href="listarUsuarios.php">Listar</a>
    </div>
</body>
</html>