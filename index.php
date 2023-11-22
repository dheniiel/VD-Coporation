<?php
$servername = "mariadb-server";
$username = "root";
$password = "123";
$dbname = "task";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="src/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="src/js/script_login.js"></script>
    <link rel="shortcurt icon" href="https://www.iconpacks.net/icons/1/free-user-login-icon-305-thumb.png" type="icon"> 
</head>

<body>
    <div class='white'>
        <div class='squares'>
            <div class='square'></div>
            <div class='square'></div>
            <div class='square'></div>
            <div class='square'></div>
            <div class='square'></div>
            <div class='square'></div>
            <div class='square'></div>
            <div class='square'></div>
            <div class='square'></div>
            <div class='square'></div>
        </div>
    </div>
    <div class='grey'></div>
    <div class="container">
        <div class="login-form">
            <img src="src/img/VDcorporation.png" alt="IF logo" class="logo">
            <form id="login_form">
                <div class="mb-3">
                    <input type="text" class="form-control" name="login" placeholder="Login" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Senha" required>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" name="btn_submit" style="background-color: #D82148; border-radius: 20px;">Entrar</button>
                </div>
                <input type="hidden" name="btn_submit" value="true">
                <div class="form-message"></div>
            </form>
            <div class="register-link">
                <p>Não tem uma conta? <a href="cadastro.php">Crie uma aqui</a>.</p>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
