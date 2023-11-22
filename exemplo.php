<?php
include_once "connect_db.php";
session_start();

if ($_SESSION['logado'] !== true) {
	header ('Location: index.php');
	exit;
}

$id_usuario = $_SESSION['id_user'];
$query = "SELECT login, nome, endereco, cpf, estado, cidade, cep FROM cadastro  WHERE id = $id_usuario";
$resultado = $connect->query($query);

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    $login = $row["login"];
    $nome = $row["nome"];
    $endereco = $row["endereco"];
    $cpf = $row["cpf"];
    $estado = $row["estado"];
    $cidade = $row["cidade"];
    $cep = $row["cep"];
}   else {
    echo "Usuário não encontrado";
}

$connect->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcurt icon" href="src/img/VDcorporationlimpo.png" type="icon"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcurt icon" href="src/img/VDcorporationlimpo.png" type="icon"> 
    <title>Perfil </title>
    <link rel="stylesheet" type="text/css"href="src/css/perfil.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
<h1 id="logo"> VD Corporation </h1> 
  <br>
    <h1 style="text-align: center; color:#151D3B; font-family: Bombing; font-size: 100px;"> Perfil </h1>
    <h3 style="text-align: center; color:#151D3B; font-family: Bombing; font-size: 35px;"> Veja seus dados: </h3>
    <br> <br>
    <div class="container"> 
        <p class="nome">Nome:</p> 
        <p class="campo"><?php echo $nome; ?> </p> <br>
        <p class="nome">Endereço:</p> 
        <p class="campo"> <?php echo $endereco; ?> </p> <br>
        <p class="nome">CPF:</p>
        <p class="campo"> <?php echo $cpf; ?> </p> <br>
        <p class="nome">Estado:</p> 
        <p class="campo"> <?php echo $estado; ?> </p> <br>
        <p class="nome">Cidade:</p> 
        <p class="campo"> <?php echo $cidade; ?> </p> <br>
        <p class="nome">CEP:</p>
        <p class="campo"> <?php echo $cep; ?> </p> <br>
</div>
    <br> <br> <br> 
    <center> <a href="logout.php"> <button type="button" style="border-radius: 20px;" class="btn btn-danger"> Sair da conta</button> </a> </center>
    <br> <br> <br>
 <footer id="footer">
		<p style="color:white;">&copy; 2023 - Todos os direitos reservados</p>
	<nav>
		<ul id="ul">
			<li id="li"><a id ="a" href="termos.php">Termos de uso</a></li>
			<li id="li"><a id ="a" href="privacidade.php">Política de privacidade</a></li>
			<li id="li"><a id ="a" href="sobre.php">Sobre nós</a></li>
			<li id="li"><a id ="a" href="contato.php">Contato</a></li>
		</ul>
	</nav>
	</footer>

</body>

</html>
