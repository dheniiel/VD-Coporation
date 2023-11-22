<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Página de Vendas</title>
    <link rel="stylesheet" type="text/css" href="src/css/vitrine.css">
    <link rel="shortcurt icon" href="https://www.queridocabide.com.br/media/sig_0WpeQTCrT3/logos/icone/icone-01.png" type="icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body style="background-color: #f8f8f8;">
    <a href="home.php">  <h1 id="logo">VD Corporation</h1> </a> <br>
    <h1 style="text-align: center; color:#151D3B; font-family: Bombing; font-size: 65px;">Confira nossos produtos:</h1> <br> <br>
    <h3 style="text-align: center; color:#151D3B; font-family: Bombing; font-size: 45px;">Camisetas:</h3>
    <a href="home.php"> <h3 id="voltar">Voltar</h3> </a> 
    <br>
    <ul class="product-list">
        <li class="product-item">
        <div class="product" id="product1">
            <figure class="product-info">
                <div class="product-info-img">
                    <img src="src/img/cavalo.png" alt="description image">
                </div>
                <h2 class="nome-produto">Camiseta muladeiro</h2>
                <p class="description">100% algodão</p>
                <p class="preco">R$50,00</p>
                <label for="size1" class="tamanho">Tamanho:</label>
                    <select id="size1">
                        <option value="P">P</option>
                        <option value="M">M</option>
                        <option value="G">G</option>
                        <option value="GG">GG</option>
                </select>
                <br>
                <center> <button class="btn btn-buy" onclick="addToCart('produto1', 'Camiseta muladeiro', 50.00, 'size1')">Adicionar ao carrinho</button> </center>
                <br>
            </figure>
        </div>
        </li>
        <li class="product-item">
        <div class="product" id="product2">
            <figure class="product-info">
                <div class="product-info-img">
                    <img src="src/img/deluxe.png" alt="description image">
                </div>
                <h2 class="nome-produto">Camiseta Ellus Jeans Deluxe</h2>
                <p class="description">100% algodão</p>
                <p class="preco">R$59,00</p>
                <label for="size2" class="tamanho">Tamanho:</label>
                <select id="size2">
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>
                </select>
                <br>
                <center> <button class="btn btn-buy" onclick="addToCart('produto2', 'Camiseta Ellus Jeans Deluxe', 59.00, 'size3')">Adicionar ao carrinho</button> </center>
                <br>
            </figure>
        </div>
        </li>
        <li class="product-item">
        <div class="product" id="product3">
            <figure class="product-info">
                <div class="product-info-img">
                    <img src="src/img/stronghold.png" alt="description image">
                </div>
                <h2 class="nome-produto">Camiseta stronghold</h2>
                <p class="description">50% poliéster e 50% algodão</p>
                <p class="preco">R$54,00</p>
                <label for="size3" class="tamanho">Tamanho:</label>
                <select id="size3">
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>
                </select>
                <br>
                <center> <button class="btn btn-buy" onclick="addToCart('produto3', 'Camiseta stronghold', 54.00, 'size3')">Adicionar ao carrinho</button> </center>
                <br>
            </figure>
        </div>
        </li>
        <li class="product-item">
        <div class="product" id="product4">
            <figure class="product-info">
                <div class="product-info-img">
                    <img src="src/img/brasil.png" alt="description image">
                </div>
                <h2 class="nome-produto">Camiseta Brasil</h2>
                <p class="description">Dri-fit</p>
                <p class="preco">R$65,00</p>
                <label for="size4" class="tamanho">Tamanho:</label>
                <select id="size4">
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>
                </select>
                <br>
                <center> <button class="btn btn-buy" onclick="addToCart('produto4', 'Camiseta Brasil', 65.00, 'size4')">Adicionar ao carrinho</button> </center>
                <br>
            </figure>
        </div>
        </li>
        <li class="product-item">
        <div class="product" id="product5">
            <figure class="product-info">
                <div class="product-info-img">
                    <img src="src/img/canoa.png" alt="description image">
                </div>
                <h2 class="nome-produto">Camiseta canoa</h2>
                <p class="description">100% algodão</p>
                <p class="preco">R$30,00</p>
                <label for="size5" class="tamanho">Tamanho:</label>
                <select id="size5">
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>
                </select>
                <br>
                <center> <button class="btn btn-buy" onclick="addToCart('produto5', 'Camiseta canoa', 30.00, 'size5')">Adicionar ao carrinho</button> </center>
                <br>
            </figure>
        </div>
        </li>
    </ul>
    <br> 
    <h3 style="text-align: center; color:#151D3B; font-family: Bombing; font-size: 45px;">Bones:</h3>
    <br> 
    <ul class="product-list">
        <li class="product-item">
        <div class="product" id="product6">
            <figure class="product-info">
                <div class="product-info-img">
                    <img src="src/img/bone_oakley.png" alt="description image">
                </div>
                <h2 class="nome-produto">Boné aba curva oakley</h2>
                <p class="description">Bege </p>
                <p class="preco">R$35,00</p>
                <label for="size6" class="tamanho">Tamanho:</label>
                    <select id="size6">
                        <option value="P">P</option>
                        <option value="M">M</option>
                        <option value="G">G</option>
                        <option value="GG">GG</option>
                </select>
                <br>
                <center> <button class="btn btn-buy" onclick="addToCart('produto6', 'Boné oakley', 35.00, 'size6')">Adicionar ao carrinho</button> </center>
                <br>
            </figure>
        </div>
        </li>
        <li class="product-item">
        <div class="product" id="product7">
            <figure class="product-info">
                <div class="product-info-img">
                    <img src="src/img/bone2.png" alt="description image">
                </div>
                <h2 class="nome-produto">Boné ecológico</h2>
                <p class="description">Bege e verde, fundo vazado </p>
                <p class="preco">R$40,00</p>
                <label for="size7" class="tamanho">Tamanho:</label>
                <select id="size7">
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>
                </select>
                <br>
                <center> <button class="btn btn-buy" onclick="addToCart('produto7', 'Boné ecológico', 40.00, 'size7')">Adicionar ao carrinho</button> </center>
                <br>
            </figure>
        </div>
        </li>
        <li class="product-item">
        <div class="product" id="product8">
            <figure class="product-info">
                <div class="product-info-img">
                    <img src="src/img/bone_lacoste.png" alt="description image">
                </div>
                <h2 class="nome-produto">Boné lacoste</h2>
                <p class="description">Azul, crocodilo grande</p>
                <p class="preco">R$52,00</p>
                <label for="size8" class="tamanho">Tamanho:</label>
                <select id="size8">
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>
                </select>
                <br>
                <center> <button class="btn btn-buy" onclick="addToCart('produto8', 'Boné lacoste', 52.00, 'size8')">Adicionar ao carrinho</button> </center>
                <br>
            </figure>
        </div>
        </li>
        <li class="product-item">
        <div class="product" id="product9">
            <figure class="product-info">
                <div class="product-info-img">
                    <img src="src/img/bone_newera.png" alt="description image">
                </div>
                <h2 class="nome-produto">Boné New Era</h2>
                <p class="description">New York, rosa</p>
                <p class="preco">R$43,50</p>
                <label for="size9" class="tamanho">Tamanho:</label>
                <select id="size9">
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>
                </select>
                <br>
                <center> <button class="btn btn-buy" onclick="addToCart('produto9', 'Boné New Era', 43.50, 'size9')">Adicionar ao carrinho</button> </center>
                <br>
            </figure>
        </div>
        </li>
        <li class="product-item">
        <div class="product" id="product10">
            <figure class="product-info">
                <div class="product-info-img">
                    <img src="src/img/bone_nike.png" alt="description image">
                </div>
                <h2 class="nome-produto">Boné nike</h2>
                <p class="description">Edição Rafel Nadal, preto</p>
                <p class="preco">R$67,00</p>
                <label for="size10" class="tamanho">Tamanho:</label>
                <select id="size10">
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>
                </select>
                <br>
                <center> <button class="btn btn-buy" onclick="addToCart('produto10', 'Boné Nike', 67.00, 'size10')">Adicionar ao carrinho</button> </center>
                <br>
            </figure>
        </div>
        </li>
    </ul>
    <br> 
    <h3 style="text-align: center; color:#151D3B; font-family: Bombing; font-size: 45px;">Agasalhos:</h3>
    <br> 
    <ul class="product-list">
        <li class="product-item">
        <div class="product" id="product11">
            <figure class="product-info">
                <div class="product-info-img">
                    <img src="src/img/adidas.png" alt="description image">
                </div>
                <h2 class="nome-produto"> Blusa adidas </h2>
                <p class="description">Moletom, cinza </p>
                <p class="preco">R$70,00</p>
                <label for="size11" class="tamanho">Tamanho:</label>
                    <select id="size11">
                        <option value="P">P</option>
                        <option value="M">M</option>
                        <option value="G">G</option>
                        <option value="GG">GG</option>
                </select>
                <br>
                <center> <button class="btn btn-buy" onclick="addToCart('produto11', 'Blusa adidas', 70.00, 'size11')">Adicionar ao carrinho</button> </center>
                <br>
            </figure>
        </div>
        </li>
        <li class="product-item">
        <div class="product" id="product12">
            <figure class="product-info">
                <div class="product-info-img">
                    <img src="src/img/bobojaco.jpg" alt="description image">
                </div>
                <h2 class="nome-produto">Bobojaco</h2>
                <p class="description">Revestido com veludo </p>
                <p class="preco">R$90,00</p>
                <label for="size12" class="tamanho">Tamanho:</label>
                <select id="size12">
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>
                </select>
                <br>
                <center> <button class="btn btn-buy" onclick="addToCart('produto12', 'Bobojaco', 90.00, 'size12')">Adicionar ao carrinho</button> </center>
                <br>
            </figure>
        </div>
        </li>
        <li class="product-item">
        <div class="product" id="product13">
            <figure class="product-info">
                <div class="product-info-img">
                    <img src="src/img/camuflado.png" alt="description image">
                </div>
                <h2 class="nome-produto">Blusa de frio camuflada</h2>
                <p class="description">Corta vento</p>
                <p class="preco">R$87,00</p>
                <label for="size13" class="tamanho">Tamanho:</label>
                <select id="size13">
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>
                </select>
                <br>
                <center> <button class="btn btn-buy" onclick="addToCart('produto13', 'Blusa de frio camuflada', 87.00, 'size13')">Adicionar ao carrinho</button> </center>
                <br>
            </figure>
        </div>
        </li>
        <li class="product-item">
        <div class="product" id="product14">
            <figure class="product-info">
                <div class="product-info-img">
                    <img src="src/img/saude.png" alt="description image">
                </div>
                <h2 class="nome-produto">Blusa North Face</h2>
                <p class="description">Moletom, azul</p>
                <p class="preco">R$103,95</p>
                <label for="size14" class="tamanho">Tamanho:</label>
                <select id="size14">
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>
                </select>
                <br>
                <center> <button class="btn btn-buy" onclick="addToCart('produto9', 'Blusa North Face', 103.95, 'size14')">Adicionar ao carrinho</button> </center>
                <br>
            </figure>
        </div>
        </li>
        <li class="product-item">
        <div class="product" id="product15">
            <figure class="product-info">
                <div class="product-info-img">
                    <img src="src/img/jaquetat.png" alt="description image">
                </div>
                <h2 class="nome-produto">Jaqueta Tommy Hilfiger</h2>
                <p class="description">Corta vento</p>
                <p class="preco">R$98,30</p>
                <label for="size15" class="tamanho">Tamanho:</label>
                <select id="size15">
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>
                </select>
                <br>
                <center> <button class="btn btn-buy" onclick="addToCart('produto15', 'Jaqueta Tommy Hilfigers', 98.30, 'size15')">Adicionar ao carrinho</button> </center>
                <br>
            </figure>
        </div>
        </li>
    </ul>
<br> <br> <br> <br> 
    <center> <div id="cart">
        <br>
        <h2>Carrinho</h2>
        <ul id="cart-items"></ul>
        <p id="total">Total: R$ 0,00</p>
    </div>
    </center>
    <br> <br> <br> <br>
    <center><button type="button" class="btn btn-success" id="paymentButton" onclick="redirectPagamento()" href="pagamento.php"> Ir para pagamento </button></center> 
    <footer id="footer">
        <p>&copy; 2023 - Todos os direitos reservados</p>
        <nav>
            <ul id="ul">
                <li id="li"><a id="a" href="termos.php">Termos de uso</a></li>
                <li id="li"><a id="a" href="privacidade.php">Política de privacidade</a></li>
                <li id="li"><a id="a" href="sobre.php">Sobre nós</a></li>
                <li id="li"><a id="a" href="contato.php">Contato</a></li>
            </ul>
        </nav>
    </footer>
    <!-- Estrutura deste site foi inspirada no código ofertado pelo site Cupcom, em que a estrutura se encontra disponível até o momento da construção deste em: https://www.cupcom.com.br/programacao/componentes-css-vitrine-de-produtos-semantica.html -->
    <script>
        let cart = [];

// Verifica se há dados salvos no localStorage ao carregar a página
window.onload = function() {
    const savedCart = localStorage.getItem('cart');
    if (savedCart) {
        cart = JSON.parse(savedCart);
        updateCart();
    }
};

function addToCart(productId, productName, productPrice, sizeId) {
    const size = document.getElementById(sizeId).value;
    const item = {
        id: productId,
        name: productName,
        price: productPrice,
        size: size
    };

    cart.push(item);
    updateCart();
}

function removeFromCart(index) {
    cart.splice(index, 1);
    updateCart();
}

function updateCart() {
    const cartItemsElement = document.getElementById('cart-items');
    const totalElement = document.getElementById('total');
        cartItemsElement.innerHTML = '';

    let total = 0;
        localStorage.setItem('cart', JSON.stringify(cart));
        cart.forEach((item, index) => {

    const listItem = document.createElement('li');
        listItem.textContent = `${item.name} - Tamanho: ${item.size} - Preço: R$ ${item.price.toFixed(2)}`;

    const removeButton = document.createElement('button');
        removeButton.textContent = 'Remover';
        removeButton.onclick = () => removeFromCart(index);
        listItem.appendChild(removeButton);
        cartItemsElement.appendChild(listItem);
        total += item.price;

    });
    totalElement.textContent = `Total: R$ ${total.toFixed(2)}`;
    localStorage.setItem('totalAmount', total);
}
function redirectPagamento() {
        if (cart.length > 0) {
            window.location.href = "pagamento.php";
        } else {
            alert("Seu carrinho está vazio. Adicione itens antes de ir para pagamento.");
        }
    }
    </script>
</body>
</html>
