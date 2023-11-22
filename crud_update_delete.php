<?php
// Conexão
require_once 'connect_db.php';

// Sessão
session_start();

include 'include_session_home.php';
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<title>Planner</title>
	<!--CSS, Scripts e ajax -->
	<link rel="stylesheet" type="text/css" href="src/css/style_crud_update_delete.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="src/js/script_pesquisa.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!--fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:700,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	</head>
<body>
<div style="margin: 4px 4px 4px 4px; align-items: start;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> <h1 style="color: #D82148; font-family: Bombing;"> VD Corporation </h1>
  <form class="form-inline">
  </form>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="https://encycolorpedia.pt/581d22"> <h3 style="margin: 8px 8px 2px 8px;"> Perfil </h3> <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastro.php"> <h3 style="margin: 8px 8px 2px 8px;"> Cadastro </h3></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="crud_update_delete.php"> <h3 style="margin: 8px 8px 2px 8px;"> Novidades </h3> </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="https://encycolorpedia.pt/581d22" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <h3 style="margin: 8px 8px 2px 8px;"> Produtos </h3>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="https://encycolorpedia.pt/581d22"> <h4> Camisetas </h4> </a>
          <a class="dropdown-item" href="https://encycolorpedia.pt/581d22"> <h4> Agasalhos </h4> </a>
          <a class="dropdown-item" href="https://encycolorpedia.pt/581d22"> <h4> Bonés </h4> </a>
        </div>
      </li>
    </ul>
  </div>
	<div class="container">
			<form method="POST" id="form-pesquisa" action="" class="form">
				<label>Search: </label>
				<input type="text" name="pesquisa" id="pesquisa" placeholder="Digite o nome do usuário" autofocus><br>
				<table id="tabela">
					<thead id="tabela">
						<tr id="tabela">
							<th id="tabela">Usuário</th>
							<th id="tabela">Nome</th>
							<th id="tabela">Endereço</th>
							<th id="tabela">Turma</th>
							<th id="tabela">Matrícula</th>
							<th id="tabela">Editar</th>
							<th id="tabela">Deletar</th>
						</tr>
					</thead>
					<tbody class="resultado">
					</tbody>
				</table>
			</form>
	</div>

</body>
</html>
