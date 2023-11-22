<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcurt icon" href="https://cdn-icons-png.flaticon.com/512/753/753399.png" type="icon">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css"href="src/css/cadastro2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body style="background-color: #f8f8f8;">
  <h1 id="logo"> VD Corporation </h1> 
  <br>
    <h1 style="text-align: center; color:#151D3B; font-family: Bombing; font-size: 100px;"> Cadastro </h1>
    <h3 style="text-align: center; color:#151D3B; font-family: Bombing; font-size: 35px;"> Insira seus seguintes dados: </h3>
    <br> <br> <br>
    <div class="conta">
        <form action="sucesso.php" method="post" id="signup-form">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" onkeypress="return lettersOnly(event);">

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <label for="password">Confirmar senha:</label>
            <input type="password" id="password" name="password" required>
            <span id="password-error" style="color: red;"></span>

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required>

            <label for="CPF">CPF:</label>
            <input type="text" id="cpf" name="cpf" maxlength="14" required>

            <label for="estado">Estado:</label>
            <select id="estado" name="estado" required>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="ES">Espirito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
                <option value="DF">Distrito Federal</option>
            </select>
<br> <br>
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" onkeypress="return lettersOnly(event);" required>

            <label for="cidade">CEP:</label>
            <input type="text" id="cep" name="cep" maxlength="9" required>

            <button style="border-radius: 20px;" type="submit">Cadastrar</button>
        </form>
    </div>
    <br> <br> <br> <br> 
 <footer id="footer">
		<p>&copy; 2023 - Todos os direitos reservados</p>
	<nav>
		<ul id="ul">
			<li id="li"><a id ="a" href="termos.php">Termos de uso</a></li>
			<li id="li"><a id ="a" href="privacidade.php">Política de privacidade</a></li>
			<li id="li"><a id ="a" href="sobre.php">Sobre nós</a></li>
			<li id="li"><a id ="a" href="contato.php">Contato</a></li>
		</ul>
	</nav>
	</footer>
    <script src="/src/js/confirmar.js"></script>
</body>
</html>
