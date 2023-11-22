<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="src/css/pagamento.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"  crossorigin="anonymous">
    <script  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"  crossorigin="anonymous"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"  crossorigin="anonymous"></script>
    <script  src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"  crossorigin="anonymous"></script>
    <title>Pagamento</title>
    <link rel="shortcurt icon" href="https://images.vexels.com/media/users/3/266058/isolated/preview/1355772349a91d6fd6ea7ee29c9c5f50-a-cone-de-dinheiro-de-moeda-de-cifra-o.png" type="icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/jquery.inputmask.min.js"></script>
</head>
<body>
<a href="home.php">  <h1 id="logo">VD Corporation</h1> </a> <br>
<h1 style="text-align: center; color:#151D3B; font-family: Bombing; font-size: 65px;">Pagamento</h1> <br> <br>
    <main>
        <h2>Resumo do Pedido</h2>
        <div>
            <p>Valor da compra: <span id="totalAmount">R$ 0,00</span></p>
            <p>Frete: R$ 10,00</p>
            <p>Total a pagar: <span id="valorPagar">R$ 0,00</span></p>
        </div>

        <h2>Formas de Pagamento</h2>
        <form action="home.php" id="paymentForm">
            <label for="creditCard">Cartão de Crédito</label>
            <input type="radio" id="creditCard" name="paymentMethod" value="creditCard" onclick="showCreditCardFields()">
            <div id="creditCardFields" style="display: none;">
                <label for="cardNumber">Número do Cartão:</label>
                <input type="text" id="cardNumber" minlength="15" maxlength="16" placeholder="Número do Cartão" required> <br> <br>
                <label for="expirationDate">Data de Expiração:</label>
                <input type="text" id="expirationDate" minlength="5" maxlength="5" placeholder="MM/AA" required><br>  <br>
                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" minlength="3" maxlength="3" placeholder="CVV" required> <br> <br>
                <label for="installment">Parcelas:</label>
                <select id="installment" required>
                    <option value="1">1x</option>
                    <option value="2">2x</option>
                    <option value="3">3x</option>
                    <option value="4">4x</option>
                    <option value="5">5x</option>
                </select>
            </div>
<br> 
            <label for="boleto">Boleto Bancário</label>
            <input type="radio" id="boleto" name="paymentMethod" value="boleto" onclick="showBoletoFields()">
            <div id="boletoFields" style="display: none;">
                <p>Número do Boleto: <span id="boletoNumber"></span></p>
            </div>
<br> 
            <label for="pix">PIX</label>
            <input type="radio" id="pix" name="paymentMethod" value="pix" onclick="showPixFields()">
            <div id="pixFields" style="display: none;">
                <p>Enviar PIX para: dhenielrodrigues08@gmail.com <br>
                    Instituição: Bradesco.
                </p>
            </div>

            <br> <br>

            <button type="button" onclick="processPayment()">Realizar Pagamento</button>
        </form>
    </main>
<br> <br>
    <footer>
        <p>&copy; 2023 - Todos os direitos reservados</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <script>
        document.getElementById('cardNumber').addEventListener('input', function (e) {
            let value = e.target.value;
            value = value.replace(/\D/g, '');

            if (value.length === 16) {
                value = value.replace(/(\d{4})(\d{4})(\d{4})(\d{4})/, '$1 $2 $3 $4');
            }

            e.target.value = value.trim();
        });

        // Máscara para a data de expiração (formato: MM/AA)
        document.getElementById('expirationDate').addEventListener('input', function (e) {
            let value = e.target.value;
            value = value.replace(/\D/g, '');

            if (value.length === 4) {
                value = value.replace(/(\d{2})(\d{2})/, '$1/$2');
            }

            e.target.value = value.trim();
        });

        // Máscara para o CVV (permitindo no máximo 3 dígitos)
        document.getElementById('cvv').addEventListener('input', function (e) {
            let value = e.target.value;
            value = value.replace(/\D/g, '');
            value = value.slice(0, 3); // Limita o comprimento máximo a 3 dígitos
            e.target.value = value.trim();
        });

        // Adiciona um ouvinte de evento ao formulário para verificar se os campos do cartão estão preenchidos
        document.getElementById('paymentForm').addEventListener('submit', function (e) {
            const selectedPaymentMethod = document.querySelector('input[name="paymentMethod"]:checked');

            if (selectedPaymentMethod && selectedPaymentMethod.value === 'creditCard') {
                const cardNumber = document.getElementById('cardNumber').value.replace(/\D/g, '');
                const expirationDate = document.getElementById('expirationDate').value.replace(/\D/g, '');
                const cvv = document.getElementById('cvv').value.replace(/\D/g, '');

                if (cardNumber.length !== 16 || expirationDate.length !== 4 || cvv.length !== 3) {
                    e.preventDefault();
                    alert('Preencha corretamente todos os campos do cartão antes de prosseguir.');
                }
            }
        });

        // Adiciona um ouvinte de evento para evitar espaços nos campos do cartão
        ['cardNumber', 'expirationDate', 'cvv'].forEach(field => {
            document.getElementById(field).addEventListener('input', function () {
                this.value = this.value.replace(/\s/g, ''); // Remove espaços
            });
        });

        // Recupera o valor total do carrinho da página anterior
        const totalAmount = localStorage.getItem('totalAmount');
        document.getElementById('totalAmount').textContent = `R$ ${parseFloat(totalAmount).toFixed(2)}`;
        var valorPagar = parseFloat(totalAmount) + 10.00;
        document.getElementById('valorPagar').textContent = `R$ ${valorPagar.toFixed(2)}`;

        // Inicializa a máscara nos campos do cartão
        Inputmask().mask(document.querySelectorAll("input"));

        // Função para mostrar campos de cartão de crédito
        function showCreditCardFields() {
            hidePaymentFields(); // Oculta outros campos antes de mostrar os campos do cartão
            const creditCardFieldsDiv = document.getElementById('creditCardFields');
            creditCardFieldsDiv.style.display = 'block';
        }

        // Função para mostrar campos de boleto
        function showBoletoFields() {
            hidePaymentFields(); // Oculta outros campos antes de mostrar os campos do boleto
            const boletoFieldsDiv = document.getElementById('boletoFields');
            boletoFieldsDiv.style.display = 'block';
            
            // Gera um número aleatório de 15 dígitos para o boleto
            const boletoNumber = Math.floor(Math.random() * 1000000000000000);
            document.getElementById('boletoNumber').textContent = boletoNumber;
        }

        // Função para mostrar campos de PIX
        function showPixFields() {
            hidePaymentFields(); // Oculta outros campos antes de mostrar os campos do PIX
            const pixFieldsDiv = document.getElementById('pixFields');
            pixFieldsDiv.style.display = 'block';
        }

        // Função para ocultar todos os campos de pagamento
        function hidePaymentFields() {
            const creditCardFieldsDiv = document.getElementById('creditCardFields');
            creditCardFieldsDiv.style.display = 'none';

            const boletoFieldsDiv = document.getElementById('boletoFields');
            boletoFieldsDiv.style.display = 'none';

            const pixFieldsDiv = document.getElementById('pixFields');
            pixFieldsDiv.style.display = 'none';
        }

        // Função para processar o pagamento
        function processPayment() {
            const selectedPaymentMethod = document.querySelector('input[name="paymentMethod"]:checked');

            if (selectedPaymentMethod) {
                const paymentMethod = selectedPaymentMethod.value;

                if (paymentMethod === 'creditCard') {
                    const cardNumber = document.getElementById('cardNumber').value;
                    const expirationDate = document.getElementById('expirationDate').value;
                    const cvv = document.getElementById('cvv').value;
                    const installment = document.getElementById('installment').value;

                    // Verifica se os campos do cartão estão preenchidos
                    if (cardNumber && expirationDate && cvv && installment) {
                        // Aqui você pode implementar a lógica para processar o pagamento com cartão
                        alert(`Muito obrigado! Pagamento feito com sucesso via Cartão de Crédito! Após o processamento enviaremos seu pedido.`);
                        window.location.href = 'agradecimento.php'; // Redireciona para home.php

                    } else {
                        alert('Preencha todos os campos do cartão antes de prosseguir.');
                    }
                } else if (paymentMethod === 'boleto') {
                    // Aqui você pode implementar a lógica para processar o pagamento com boleto
                    alert(`Muito obrigado! Pagamento feito com sucesso via Boleto Bancário! Após o processamento enviaremos seu pedido.`);
                    window.location.href = 'agradecimento.php'; // Redireciona para home.php

                } else if (paymentMethod === 'pix') {
                    // Aqui você pode implementar a lógica para processar o pagamento com PIX
                    alert(`Muito obrigado! Pagamento feito com sucesso via PIX! Após o processamento enviaremos seu pedido.`);
                    window.location.href = 'agradecimento.php'; // Redireciona para home.php

                }
            } else {
                alert('Selecione uma forma de pagamento antes de prosseguir.');
            }
        }

        if (selectedPaymentMethod && selectedPaymentMethod.value === 'creditCard') {
                const cardNumber = cardNumberInput.value.replace(/\D/g, '');
                const expirationDate = expirationDateInput.value.replace(/\D/g, '');
                const cvv = cvvInput.value.replace(/\D/g, '');

                if (cardNumber.length !== 16 || expirationDate.length !== 4 || cvv.length !== 3) {
                    e.preventDefault();
                    alert('Preencha corretamente todos os campos do cartão antes de prosseguir.');
                }
            }
    </script>

</body>
</html>
