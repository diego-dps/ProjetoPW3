<?php
session_start();

if(isset($_SESSION['login'])){
	header("location : login.php");
	die();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Login</title>
</head>
<body>
<div>

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


    <div class="login shadow-lg col-md-6 mt-5 my-5 mx-auto">
		<form action="../controller/validarLogin.php" method="POST" id="login" name="login" 
		value="<?php
			if(isset($_SESSION['email'])){
				echo $_SESSION['email'];
				unset ($_SESSION['email']);
				session_destroy();			}
		?>">
			<h1>Faça o seu login</h1>
			<div>
				<label>Email</label>
				<input class="form-control " type="text" name="user" id="user">
			</div>
			<div class="my-3">
				<label>Senha</label>
				<input class="form-control " type="password" name="pass" id="pass">
			</div>
			<div class="mx-auto">
				<button type="submit" class="btn btn-primary mx-auto" name="btnLogin" id="btnLogin">Entrar</button>
            </div>
		</form>
    </div>
</div>




 <div class="container-fluid bg-warning">
		<div class="container">
			<div class="row">
				<div class="col-sm" align="center">

					<h4 class="my-3">Redes Sociais</h4>
					<h6><img src="../imagens/icons8-instagram-48.png">books.com</h6>
					<h6><img src="../imagens/icons8-facebook-48.png">books.com</h6>
					<h6><img src="../imagens/icons8-linkedin-48.png">books.com</h6>

				
				</div>
				<div class="col-sm" align="center">

					<h4 class="my-3 ml-4">A Books.com</h4>
			
					<ul>
						<li class="list-unstyled"><a src="#">Sobre Nós</a></li>
						<li class="list-unstyled"><a src="#">Trabalhe Conosco</a></li>
						<li class="list-unstyled"><a src="#">Contato</a></li>
						<li class="list-unstyled"><a src="#">Termos de serviço</a></li>
					<ul>
				</div>
				<div class="col-sm" align="center">
					<h4 class="my-3 ml-4">Suporte</h4>

					<ul class="mx-auto">
						<li class="list-unstyled"><a src="#">Fale Conosco</a></li>
						<li class="list-unstyled"><a src="#">Reclame aqui</a></li>
						<li class="list-unstyled"><a src="#">Dúvidas Frequentes</a></li>
						<li class="list-unstyled"><a src="#">Reportar Erro</a></li>
					<ul>
				</div>
				<div class="col-sm" align="center">
					<h4 class="my-3 ml-4">Suporte</h4>

					<ul class="mx-auto">
						<li class="list-unstyled"><a src="#">Fale Conosco</a></li>
						<li class="list-unstyled"><a src="#">Reclame aqui</a></li>
						<li class="list-unstyled"><a src="#">Dúvidas Frequentes</a></li>
						<li class="list-unstyled"><a src="#">Reportar Erro</a></li>
					<ul>
					
				</div>
			</div>
		</div>
	</div>


    <script src="../node_modules/jquery/dist/jquery.js"></script>
	<script src="../node_modules/popper.js/dist/umd/popper.js"></script>
	<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script src="../node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
	<script src="../javascript/validacoes.js"></script>
					
</body>
</html>