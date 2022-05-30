<?php
require 'controleDeAcesso.php';
require 'conexao.php';

//Apagar p/ sempre ou restaurar;

if (isset($_POST['id'])){

    //consulta segura sem usar o prepare.
    $id = preg_replace('/\D/', '', $_POST['id']); //tudo que não seja digito sumir.

    if ($_GET['a'] == 'r') //restaura
    {
        $stmt = $bd->query("UPDATE tarefas SET apagado = 0 WHERE id = $id");
        $stmt -> execute();
        echo "Tarefa $id restaurada<br>";
    }
    elseif ($_GET['a'] == 'a') //Apaga p/ sempre
    {

        $stmt = $bd->query("DELETE FROM tarefas WHERE id = $id");
        $stmt -> execute();
        echo "Tarefa $id Apagada<br>";
    }

}
$stmt = $bd->query('SELECT id, descricao, imagem FROM tarefas WHERE apagado = 1');

$stmt->execute();

$excluidos = [];

while($registo = $stmt->fetch(PDO::FETCH_ASSOC)){
    $excluidos[] = $registo;
}

include 'lixeiraView.php';