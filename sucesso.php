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

$sql = "INSERT INTO cadastro (login, senha, nome, endereco, cpf, estado, cidade, cep) VALUES ('$email', SHA2('$password', 256), '$nome','$endereco','$cpf','$estado','$cidade','$cep');"; 

$conn->query($sql);

$conn->close();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Realizado com Sucesso</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            text-align: center;
        }

        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
            margin-top: 50px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            font-size: 18px;
        }

        .success-icon {
            color: #28a745;
            font-size: 48px;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-icon">
            <i class="fas fa-check-circle"></i>
        </div>
        <img src="https://static.vecteezy.com/system/resources/thumbnails/017/197/461/small/green-check-mark-icon-on-transparent-background-free-png.png" alt="Agradecimento" width="125px" weight="125px" class="img-fluid mt-5">
        <h1>Cadastro Realizado com Sucesso</h1>
        <p>O seu cadastro foi realizado com sucesso. Agora você faz parte da nossa comunidade.</p>
        <p><a href="home.php">Voltar para a página inicial</a></p>
    </div>
</body>
</html>
