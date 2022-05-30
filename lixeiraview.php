<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lixeira</title>
</head>
<style>
    .table {
        width: 150px; 
        border: solid 2px #ddd; 
        border-collapse: collapse; 
        background-color: #c6c6c6;
        text-align: center;
    }
    td{
        padding: 15px;
        border: solid 2px #000;

    }
    .table td, .table th {
        border: 1px solid #ddd;
        padding: 8px;
        background-color: #4254c8;
    }
</style>
<body>
    <form method="post">
        <table class="table">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
            <?php foreach($excluidos as $excluido):
                    $img = 'N/D';
                    if(!empty($excluido['imagem'])){
                        if(is_file($excluido['imagem'])){
                            $img = "<img src='{$excluido['imagem']} width='250' height='250'>";
                        }
                    }
                ?>
                    <tr>
                        <td><?php echo $excluido['id']; ?></td>
                        <td><?php echo $excluido['descricao']; ?></td>
                        <td><?php echo $img ?></td>
                        <td><button name="id" formaction='lixeira.php?a=r'value = "<?php echo $excluido['id']; ?>">Restaurar</button></td>
                        <td><button name="id" formaction='lixeira.php?a=a' value = "<?php echo $excluido['id'] ?>">Exluir</button></td>
                    </tr>
            <?php endforeach;?>
        </table>
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>