<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <style>
        /* Estilos de exemplo para melhorar a apresentação */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        #cart {
            border: 1px solid #333;
            padding: 10px;
            background-color: #fff;
            margin: 20px;
        }
    </style>
</head>
<body>
    <div id="cart">
        <h2>Carrinho</h2>
        <?php
            // Verificar se o parâmetro 'cart' está presente na URL
            if (isset($_GET['cart'])) {
                // Decodificar os dados JSON
                $cart = json_decode($_GET['cart'], true);

                // Exibir os itens do carrinho
                foreach ($cart as $item) {
                    echo "<p>{$item['name']} - Tamanho: {$item['size']} - Preço: R$ {$item['price']}</p>";
                }

                // Calcular o total
                $total = array_sum(array_column($cart, 'price'));
                echo "<p>Total: R$ {$total}</p>";
            } else {
                echo "<p>Carrinho vazio</p>";
            }
        ?>
    </div>
</body>
</html>
