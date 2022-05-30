<?php
require_once 'conexao.php';

$email              = $_POST['email']; //Dado inseguro
$nome               = $_POST['nome']; //Dado inseguro
$senha              = $_POST['senha']; //Dado inseguro
$confirmacao_senha  = $_POST['confirmacao_senha']; //Dado inseguro

if($senha != $confirmacao_senha) {
    echo "A senha não confere com sua confirmação <br>
          <a href='formUsuario.php'></a> ";
          exit();
}

$senha = password_hash($senha, PASSWORD_DEFAULT);

$stmt = $bd->prepare('  INSERT INTO usuarios 
                            (id, nome, senha) 
                        VALUES 
                            (:id, :nome, :senha)'); 

$stmt->bindParam(':id', $email); // Me protege de SQL INJECTION; garante que o que vem do usuário seja gravado como texto normal.
$stmt->bindParam(':nome', $nome); 
$stmt->bindParam(':senha', $senha); 

if( $stmt->execute() ){
    echo "$nome gravado com sucesso!";
}else{
    echo "Problema ao gravar $nome";
}


echo "<br><a href='formUsuarios.php'>Voltar</a>";