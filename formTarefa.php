<?php
require('controleDeAcesso.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
</head>
<body>
    <form action="gravaTarefa.php" method="post" enctype="multipart/form-data">
        <label>Adicionar uma nova tarefa:</label><br>
        <input type="text" name="tarefa" placeholder="Digite uma nova tarefa">
        <br><br>
        <input type="file" name="figura">
        <br><br>
        <input type="submit" value="Enviar">
        <br>
    </form>
    <a href="index.php">Menu</a>
</body>
</html>