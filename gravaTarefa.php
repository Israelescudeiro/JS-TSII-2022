<?php
require 'controleDeAcesso.php';
require 'conexao.php';

$tarefa = $_POST['tarefa']; //Dado inseguro
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

$stmt = $bd->prepare('INSERT INTO tarefas (descricao, imagem) VALUES (:tarefa, :imagem)'); // preparando a consulta

$stmt->bindParam(':tarefa', $tarefa); // Me protege de SQL INJECTION; garante que o que vem do usuário seja gravado como texto normal.
$stmt->bindParam(':imagem', $arquivoEnviado);

if( $stmt->execute() ){
    echo "$tarefa inserida com sucesso!";
}else{
    echo "Problema na gravação da nova tarefa $tarefa";
}
?>

<br><a href="form.php">Voltar</a>
<br><a href="listarTarefas.php">Ver todas as Tarefas</a>