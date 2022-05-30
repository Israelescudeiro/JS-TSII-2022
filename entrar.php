<?php
// php.net PDO MS SQL Server
// php ini - Onde ativar o módulo
//Módulo: PDO_SQLSRV - instalar essa extensão, caso não esteja instalado.

session_start();
require_once 'conexao.php';

$email = trim($_POST['email'] ?? '');
$senha = trim($_POST['senha'] ?? '');

if(empty($email) || empty($senha)){
    header('location: index.php');
}

$stmt = $bd->prepare("  SELECT senha 
                        FROM usuarios 
                        WHERE id = :email");
$stmt->bindParam(':email', $email);
$stmt->execute();
$val = $stmt->fetch(PDO::FETCH_ASSOC);

if( password_verify($senha, $val['senha']) ){

    $_SESSION['id'] = $email;
    
    header('location: index.php');
    
}else{
    echo "Credenciais inválidas<br><br><a href='index.php'>Voltar</a>";
}