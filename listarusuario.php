<?php
    require 'controleDeAcesso.php';
    require 'conexao.php'; 
    
    $consulta = $bd->query("SELECT id, nome FROM usuarios")->fetchAll();
?>

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
<a href="formUsuarios.php">+ Nova Usuario</a><br>
<form method="post">
    <table class="table">
    <tr>
        <th>ID</th>
        <th>Descrição</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </tr>
        <?php foreach($consulta as $linha):?>
                <tr>
                    <td><?php echo $linha['id']; ?></td>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><button name="id" formaction="editarUsuario.php" value = "<?php echo $linha['id']; ?>">Editar</button></td>
                    <td><button name="id" formaction="apagarUsuario.php" value = "<?php echo $linha['id'] ?>">Exluir</button></td>
                </tr>
        <?php endforeach;?>
    </table>
</form>
<br>
<a href="index.php">Menu</a>