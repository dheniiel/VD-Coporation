<?php

// Verificação de sessão para acessar a página
if (!isset($_SESSION['logado'])) {
	header('Location: index.php');
	exit;
}

$idUser = $_SESSION['id_user'];
$nomeUser = $_SESSION['nome'];
$emailUser = $_SESSION['email'];
$enderecoUser = $_SESSION['endereco'];
$cpfUser = $_SESSION['cpf'];
$estadoUser = $_SESSION['estado'];
$cidadeUser = $_SESSION['cidade'];
$cepUser = $_SESSION['cep'];
$sqlName = "SELECT * FROM cadastro WHERE id = '$idUser'" and "SELECT * FROM cadastro WHERE id = '$emailUser'";
$resultName = mysqli_query($connect, $sqlName);
$dadosName = mysqli_fetch_array($resultName);
?>