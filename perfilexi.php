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
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/css/perfil.css">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="shortcurt icon" href="https://cdn-icons-png.flaticon.com/512/4739/4739405.png" type="icon"> 

</head>

<body>
<h1 id="logo"> VD Corporation </h1> 
  <br>
    <h1 style="text-align: center; color:#151D3B; font-family: Bombing; font-size: 75px;"> Perfil </h1>
    <h3 style="text-align: center; color:#151D3B; font-family: Bombing; font-size: 35px;"> Veja seus dados: </h3>
    <a href="home.php"><h3 id="voltar"> Voltar </h3> </a>
    <br> 
    <div class="container"> 
    <form>
        <label class="nome">Nome:</label> 
        <input type="text" class="campo" value="<?php echo $nome; ?>" disabled> <br>
        <label class="nome">Endereço:</label> 
        <input type="text" class="campo" value="<?php echo $endereco; ?>" disabled> <br>
        <label class="nome">CPF:</label>
        <input type="text" class="campo" value="<?php echo $cpf; ?>" disabled> <br>
        <label class="nome">Estado:</label> 
        <input type="text" class="campo" value="<?php echo $estado; ?>" disabled> <br>
        <label class="nome">Cidade:</label> 
        <input type="text" class="campo" value="<?php echo $cidade; ?>" disabled> <br>
        <label class="nome">CEP:</label>
        <input type="text" class="campo" value="<?php echo $cep; ?>" disabled> <br>
    </form> 
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
