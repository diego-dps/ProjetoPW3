 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Home</title>
</head>
<body>
	

	<nav class="navbar navbar-light bg-warning">
		<div class="dropdown nav-item row">
		
			<button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<a class=" col-1"><img src="imagens/menu.png"></a>
			</button>

		<div class="dropdown-menu p-5" aria-labelledby="dropdownMenu2">
    		<a class="dropdown-item" type="button" href="view/cadastro.php">Cadastro</a>
    		<a class="dropdown-item" type="button" href="view/login.php">Login</a>
  		</div>
		
		</div>
			
					
				
		<form class="form-inline d-none d-sm-none d-md-none d-lg-block">
			<input class="form-control col-md" type="search" placeholder="Search" aria-label="Search">
			<button class="btn form-control col-2" type="submit"><img src="assets/imagens/icons8-pesquisar-48.png"></button>
		</form>

		<a class="col"><img style="height: 56px" src="imagens/books.com.png"></a>

		<a class="col-1 d-none d-sm-none d-md-none d-lg-block" href=""><img src="imagens/icons8-lista-de-desejos-48.png"></a>
		<a class="col-1 d-none d-sm-none d-md-block" href=""><img src="imagens/icons8-carrinho-de-compras-48.png"></a>
		<a class="col-1 d-none d-sm-none d-md-block" href="view/login.php"><img src="imagens/usuario.png"></a>

	</nav>




	<div class="container-fluid d-none d-sm-none d-md-block" style="background-color: Tomato;">
		<div class="row mx-auto">
			<div class="col-2" align="center"><h6>Promoções</h6><div><img src="imagens/icons8-desconto-48.png"></div></div>
			<div class="col-2" align="center"><h6>Clássicos</h6><div><img src="imagens/icons8-estante-de-livros-48.png"></div></div>
			<div class="col-2" align="center"><h6>Editoras</h6><div><img src="imagens/icons8-livros-48.png"></div></div>
			<div class="col-2" align="center"><h6>Autores</h6><div><img src="imagens/icons8-grupo-48.png"></div></div>
			<div class="col-2" align="center"><h6>Lançamentos</h6><div><img src="imagens/icons8-novo-48.png"></div></div>
			<div class="col-2" align="center"><h6>Mais vendidos</h6><div><img src="imagens/icons8-garantia-48.png"></div></div>	
		</div>
	</div>


<div id="" class="carousel slide col-10 my-\uto mx-auto" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block " style="height:400px; width: 100%;" src="imagens/library.jpg" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" style="height:400px; width: 100%;" src="imagens/books-985954_1920.jpg" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" style="height:400px; width: 100%;" src="imagens/coffee-2440074_1920.jpg" alt="Terceiro Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>



<h1 align="center" class="my-5">Categorias</h1>



	<div class="card-group mx-5 my-2">
	
			<div class="card">
				<img src="imagens/literatura.jpg" style="height: 300px" class="card-img-top" alt="...">
				<div class="card-body">
				<h5 class="card-title">Hqs e Mangás</h5>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas turpis vitae turpis lacinia varius</p>
				</div>
				<button class="btn">Ver Mais</button>
			</div>
			<div class="card">
				<img src="imagens/literatura.jpg" style="height: 300px" class="card-img-top" alt="...">
				<div class="card-body">
				<h5 class="card-title">Hqs e Mangás</h5>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas turpis vitae turpis lacinia varius</p>
				</div>
				<button class="btn">Ver Mais</button>
			</div>
			<div class="card">
				<img src="imagens/literatura.jpg" style="height: 300px" class="card-img-top" alt="...">
				<div class="card-body">
				<h5 class="card-title">Hqs e Mangás</h5>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas turpis vitae turpis lacinia varius</p>
				</div>
				<button class="btn">Ver Mais</button>
			</div>
			<div class="card">
				<img src="imagens/literatura.jpg" style="height: 300px" class="card-img-top" alt="...">
				<div class="card-body">
				<h5 class="card-title">Hqs e Mangás</h5>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas turpis vitae turpis lacinia varius</p>
				</div>
				<button class="btn">Ver Mais</button>
			</div>

	</div>
	
 	


	<div class="card-group mx-5 my-2">
	
			<div class="card">
				<img src="imagens/literatura.jpg" style="height: 300px" class="card-img-top" alt="...">
				<div class="card-body">
				<h5 class="card-title">Hqs e Mangás</h5>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas turpis vitae turpis lacinia varius</p>
				</div>
				<button class="btn">Ver Mais</button>
			</div>
			<div class="card">
				<img src="imagens/literatura.jpg" style="height: 300px" class="card-img-top" alt="...">
				<div class="card-body">
				<h5 class="card-title">Hqs e Mangás</h5>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas turpis vitae turpis lacinia varius</p>
				</div>
				<button class="btn">Ver Mais</button>
			</div>
			<div class="card">
				<img src="imagens/literatura.jpg" style="height: 300px" class="card-img-top" alt="...">
				<div class="card-body">
				<h5 class="card-title">Hqs e Mangás</h5>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas turpis vitae turpis lacinia varius</p>
				</div>
				<button class="btn">Ver Mais</button>
			</div>
			<div class="card">
				<img src="imagens/literatura.jpg" style="height: 300px" class="card-img-top" alt="...">
				<div class="card-body">
				<h5 class="card-title">Hqs e Mangás</h5>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas turpis vitae turpis lacinia varius</p>
				</div>
				<button class="btn">Ver Mais</button>
			</div>

	</div>



	<div class="container-fluid bg-warning">
		<div class="container">
			<div class="row">
				<div class="col-sm" align="center">

					<h4 class="my-3">Redes Sociais</h4>
					<h6><img src="imagens/icons8-instagram-48.png">books.com</h6>
					<h6><img src="imagens/icons8-facebook-48.png">books.com</h6>
					<h6><img src="imagens/icons8-linkedin-48.png">books.com</h6>

				
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


	<script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>				
</body>
</html>