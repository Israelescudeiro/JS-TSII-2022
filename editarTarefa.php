<?php
require 'controleDeAcesso.php';
require_once 'conexao.php';

$id = preg_replace('/\D/', '', $_POST['id']); //Usando expressão regular para tratar o dado evitando SQL Injection;

#atualiza o registro
if(isset($_POST['tarefa'])){ 

    $arquivoEnviado = '';

    if($_FILES['figura']['error'] == 0 && $_FILES['figura']['size'] > 0){

        $mimeType = mime_content_type($_FILES['figura']['tmp_name']);

        $campos = explode('/', $mimeType);

        $tipo = $campos[0];
        $ext = $campos[1];

        if($tipo == 'image'){

            $arquivoEnviado = 'imagens/' . $_FILES['figura']['name'] . '_' . md5(rand(-99999, 99999) . microtime()) . '.' . $ext;

            move_uploaded_file($_FILES['figura']['tmp_name'], 
                                "$arquivoEnviado");
        }else{
            echo "Só é possível enviar tipo de arquivo de imagens";
        }
    }

    $stmt = $bd->prepare('UPDATE tarefas SET descricao = :descricao, imagem = :imagem WHERE id = :id');
    $stmt->bindParam(':descricao', $_POST['tarefa']);
    $stmt->bindParam(':imagem', $arquivoEnviado);
    $stmt->bindParam(':id', $id);

    if($stmt->execute()){

        echo "Tarefa atualizada com sucesso!";
    }else{
        echo "Erro ao atualizar a tarefa";
    }
}# FIM ATUALIZA REGISTRO

$stmt = $bd->query("SELECT descricao, imagem FROM tarefas WHERE id = $id"); // ->query Serve para o select
$stmt->execute();
$tarefa = $stmt->fetch(PDO::FETCH_ASSOC);

$img = 'N/D';

if(!empty($tarefa['imagem'])){
    if(is_file($tarefa['imagem'])){
        $img = "<img src='{$tarefa['imagem']}'>";
    }
}

echo "  <form method='post'>
            <label for='tarefa'>Tarefa</label>
            <input type='text' id='tarefa' name='tarefa' value=' {$tarefa['descricao']}'><br><br>
            $img<br><br>
            <input type='hidden' name='id' value='$id'><br>
            <input type='file' name='figura'><br>
            <input type='submit' value='Atualizar'>
        </form> <a href='listarTarefas.php'>Voltar</a>";