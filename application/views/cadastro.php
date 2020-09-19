<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Cadastro</title>
</head>
<body>
<nav class="navbar navbar-light bg-warning">
		<div class="dropdown nav-item row">
		
			<button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<a class=" col-1"><img src="../imagens/menu.png"></a>
			</button>


		<div class="dropdown-menu p-5" aria-labelledby="dropdownMenu2">
    		
			
			
    		<a class="dropdown-item" type="button">Cadastro</a>
    		<a class="dropdown-item" type="button">Login</a>
  		</div>
		
		</div>
			

					
				
		<form class="form-inline d-none d-sm-none d-md-none d-lg-block">
			<input class="form-control col-md" type="search" placeholder="Search" aria-label="Search">
			<button class="btn form-control col-2" type="submit"><img src="../imagens/icons8-pesquisar-48.png"></button>
		</form>

		<a class="col"><img style="height: 56px" src="../imagens/books.com.png"></a>

		<a class="col-1 d-none d-sm-none d-md-none d-lg-block" href=""><img src="../imagens/icons8-lista-de-desejos-48.png"></a>
		<a class="col-1 d-none d-sm-none d-md-block" href=""><img src="../imagens/icons8-carrinho-de-compras-48.png"></a>
		<a class="col-1 d-none d-sm-none d-md-block" href="view/login.php"><img src="../imagens/usuario.png"></a>

	</nav>



<div>
    <div class="cadastro shadow-lg col-md-6 mt-5 my-5 mx-auto">
		<form action="../controller/validarCadastro.php" method="POST" id="cadastro" name="cadastro">
			<h1>Faça o seu cadastro</h1>
			<div>
				<label>Nome</label>
				<input class="form-control " type="text" name="cdNome" id="cdNome">
			</div>
			<div>
				<label>Email</label>
				<input class="form-control " type="text" name="cdEmail" id="cdEmail">
			</div>
			<div>
				<label>Nickname</label>
				<input class="form-control " type="text" name="cdNick" id="cdNick">
			</div>
			<div>
				<label>CPF</label>
				<input class="form-control " type="text" name="cdCpf" id="cdCPF">
			</div>
			<div>
				<label>Senha</label>
				<input class="form-control " type="text" name="cdPass" id="cdPass">
			</div>
			<div class="my-3">
				<label>Confirmar Senha</label>
				<input class="form-control " type="text" name="cdConfPass" id="cdConfPass">
			</div>
			<div class="mx-auto">
				<button type="submit" class="btn btn-primary mx-auto">Cadastrar</button>
            </div>
		</form>
    </div>
</div>

    <script src="../node_modules/jquery/dist/jquery.js"></script>
	<script src="../node_modules/popper.js/dist/umd/popper.js"></script>
	<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
	<script src="../javascript/validacoes.js"></script>
					
</body>
</html>