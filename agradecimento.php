<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="src/css/agradecimento.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"  crossorigin="anonymous">
    <title>Obrigado !</title>
    <link rel="shortcurt icon" href="https://www.imagensempng.com.br/wp-content/uploads/2021/08/01-47.png" type="icon">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/017/197/461/small/green-check-mark-icon-on-transparent-background-free-png.png" alt="Agradecimento" width="125px" weight="125px" class="img-fluid mt-5">
                <h1 class="mt-4">A VD Coporation agradece pela sua compra!</h1>
                <p class="lead">Seu pedido foi recebido e está em processamento. Em breve, você receberá mais informações sobre o status do seu pedido.</p>
                <p class="lead">Código do Pedido: <strong><?php echo uniqid(); ?></strong></p>
                <p class="lead">Para mais informações, entre em contato conosco.</p>
                <a href="home.php" style="background-color: #151D3B; border-color:white; border-radius: 20px;"class="btn btn-primary mt-3">Voltar à Página Inicial</a>
            </div>
        </div>
    </div>

    <footer class="text-center mt-5">
        <p>&copy; <?php echo date("Y"); ?> - Todos os direitos reservados</p>
    </footer>

    <script  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"  crossorigin="anonymous"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"  crossorigin="anonymous"></script>
    <script  src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"  crossorigin="anonymous"></script>
</body>
</html>
