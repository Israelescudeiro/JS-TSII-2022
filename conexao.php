
<?php
// Conecta no banco de dados
$dsn = "mysql:dbname=app;host=localhost";
$dbuser = 'root';
$dbpass = '';

$bd = new PDO ($dsn, $dbuser, $dbpass);
//FIM Conecta no Banco de Dados