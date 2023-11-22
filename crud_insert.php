<?php

//Conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "task";

$connect = mysqli_connect($servername, $username, $password, $db_name);

$login = mysqli_escape_string($connect, $_POST['login']);
$nome = mysqli_escape_string($connect, $_POST['nome']);
$senha = mysqli_escape_string($connect, $_POST['senha']);
$cpf = mysqli_escape_string($connect, $_POST['cpf']);
$endereco = mysqli_escape_string($connect, $_POST['endereco']);
$turma = mysqli_escape_string($connect, $_POST['turma']);
$matricula = mysqli_escape_string($connect, $_POST['matricula']);


$sql = "INSERT INTO users VALUES (null, $login, $nome, $senha, $cpf, $endereco, $turma, $matricula, null, null);";


mysqli_query ($connect, $sql);
echo "Done!";

if(mysqli_connect_error()):
	echo "Error: ".mysqli_connect_error();
endif;

mysqli_close($connect);
?>
