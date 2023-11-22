<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Vendas</title>
    <link rel="stylesheet" type="text/css" href="src/css/vendas.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<h1 id="logo"> VD Coporation </h1> <br>
    <h1 style="text-align: center; color:#151D3B; font-family: Bombing; font-size: 100px;">Camisetas </h1>
    <h3 style="text-align: center; color:#151D3B; font-family: Bombing; font-size: 35px;"> Confira os nossos produtos disponiveis: </h3>
    <br> <br> <br>
    <div class="container">
        <center> <img class="product-image" src="src/img/cavalo.png" alt="Seu Produto" width="400" height="400"> </center> <br> <br>
        <p class="product-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget libero at ipsum blandit gravida vel in purus.
        </p>
        <p class="price">R$ 99,99</p>
        <button class="buy-button" onclick="openPopup()">Adicionar ao carrinho</button>
        <div class="overlay" id="overlay" style="display: none;"></div>
        <div class="popup" id="popup" style="display: none;">
            <h2>Tamanhos disponíveis</h2>
            <p>P</p>
            <p>M</p>
            <p>G</p>
            <p>GG</p>
        <button type="submit" onclick="closePopup()">Fechar</button>
        </div>
    </div>
    <div class="container">
        <center> <img class="product-image" src="src/img/deluxe.png" alt="Seu Produto" width="400" height="400"> </center> <br> <br>
        <p class="product-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget libero at ipsum blandit gravida vel in purus.
        </p>
        <p class="price">R$ 99,99</p>
        <button class="buy-button" onclick="openPopup()">Adicionar ao carrinho</button>
        <div class="overlay" id="overlay" style="display: none;"></div>
        <div class="popup" id="popup" style="display: none;">
            <h2>Tela Flutuante</h2>
            <p>Conteúdo da tela flutuante.</p>
        <button onclick="closePopup()">Fechar</button>
        </div>
    </div>
    <div class="container">
        <center><img class="product-image" src="src/img/canoa.png" alt="Seu Produto" width="400" height="400"> </center> <br> <br>
        <p class="product-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget libero at ipsum blandit gravida vel in purus.
        </p>
        <p class="price">R$ 99,99</p>
        <button class="buy-button" onclick="openPopup()">Adicionar ao carrinho</button>
        <div class="overlay" id="overlay" style="display: none;"></div>
        <div class="popup" id="popup" style="display: none;">
            <h2>Tela Flutuante</h2>
            <p>Conteúdo da tela flutuante.</p>
        <button onclick="closePopup()">Fechar</button>
        </div>
    </div>
    <div class="container">
        <center><img class="product-image" src="src/img/stronghold.png" alt="Seu Produto" width="400" height="400"> </center> <br> <br>
        <p class="product-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget libero at ipsum blandit gravida vel in purus.
        </p>
        <p class="price">R$ 99,99</p>

        <button class="buy-button" onclick="openPopup()">Adicionar ao carrinho</button>
        <div class="overlay" id="overlay" style="display: none;"></div>
        <div class="popup" id="popup" style="display: none;">
            <h2>Tela Flutuante</h2>
            <p>Conteúdo da tela flutuante.</p>
        <button onclick="closePopup()">Fechar</button>
        </div>
    </div>
    <div class="container">
        <center><img class="product-image" src="src/img/brasil.png" alt="Seu Produto" width="400" height="400"> </center> <br> <br>
        <p class="product-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget libero at ipsum blandit gravida vel in purus.
        </p>
        <p class="price">R$ 99,99</p>
        <button class="buy-button" onclick="openPopup()">Adicionar ao carrinho</button>
        <div class="overlay" id="overlay" style="display: none;"></div>
        <div class="popup" id="popup" style="display: none;">
            <h2>Tela Flutuante</h2>
            <p>Conteúdo da tela flutuante.</p>
        <button onclick="closePopup()">Fechar</button>
        </div>
    </div>
    <br> <br> <br> <br> <br> 

    <footer id="footer">
		<p>&copy; 2023 - Todos os direitos reservados</p>
	<nav>
		<ul id="ul">
			<li id="li"><a id ="a" href="termos.php">Termos de uso</a></li>
			<li id="li"><a id ="a" href="#">Política de privacidade</a></li>
			<li id="li"><a id ="a" href="#">Sobre nós</a></li>
			<li id="li"><a id ="a" href="#">Contato</a></li>
		</ul>
	</nav>
	</footer>
    <script src="/src/js/poup.js"></script>
</body>
</html>
