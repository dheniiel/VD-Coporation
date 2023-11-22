<?php
$servername = "mariadb-server";
$username = "root";
$password = "123";
$dbname = "task";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conn->connect_error);
}

// Coleta os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$password = $_POST["password"];
$endereco = $_POST['endereco'];
$cpf = $_POST['cpf'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="src/css/cadastro2.css">
</head>
<body style="background-color: white;">
<h1 id="logo"> VD Corporation </h1> 
<br> <br>
<center>
<h2 style="color: #151D3B; font-family: Bombing; font-size: 75px;"> Bem vindo: <?php echo $_POST["nome"]?></h2>
<h3 style="color: #151D3B; font-family: Bombing; font-size: 50px;"> Obrigado por se cadastrar em nossa loja </h3> <br> <br>
<div class="conta">
    <h3> Confirme seus dados: </h3>
    <form action="sucesso.php" method="post">  
        <input type="text" value="<?php echo $_POST["email"]?>" id="nome" name="email" required readonly>
        <input type="text" value="<?php echo $_POST["endereco"]?>" id="nome" name="endereco" required readonly>
        <input type="text" value="<?php echo $_POST["cpf"]?>" id="nome" name="cpf" required readonly>
        <input type="text" value="<?php echo $_POST["cidade"]?>" id="nome" name="cidade" required readonly>
        <input type="text" value="<?php echo $_POST["estado"]?>" id="nome" name="estado" required readonly>
        <input type="text" value="<?php echo $_POST["cep"]?>" id="nome" name="cep" required readonly>
        <label for="password">Confirmar senha:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Prosseguir</button>
    </form>
    <br>
    <a href="cadastro.php"> <button type="submit">Alterar</button> </a>
    </div>
<br>
</center>
<br> <br> <br> <br> <br> 

<footer id="footer">
		<p>&copy; 2023 - Todos os direitos reservados</p>
	<nav>
		<ul id="ul">
			<li id="li"><a id ="a" href="#">Termos de uso</a></li>
			<li id="li"><a id ="a" href="#">Política de privacidade</a></li>
			<li id="li"><a id ="a" href="#">Sobre nós</a></li>
			<li id="li"><a id ="a" href="#">Contato</a></li>
		</ul>
	</nav>
	</footer>
    <script src="/src/js/confirmar.js"></script>
</body>
</html>