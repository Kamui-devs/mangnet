<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Mangnet</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300&display=swap" rel="stylesheet">
	<!-- Carousel -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
	<div id="main">
		<header id="cabecalho">
			<figure id="logo">
				<img src="_fotos/f1.png">
			</figure>
			<nav id="menu">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Nossa História</a></li>
					<li><a href="">Planos</a></li>
					<li><a href="">Área de Cobertura</a></li>
					<li><a href="">Suporte/SAC</a></li>
				</ul>	
			</nav>
		</header>
		<section id="conteudo">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="_fotos/a.jpg" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="_fotos/b.jpg" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="_fotos/c.jpg" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			<article class="esquerda">
				<figure class="e"><img src="_fotos/f3.png"></figure>
				<aside class="texto1">
					<h1>Agora estamos com fibra Óptica</h1>
					<p>30 mb de internet da Embratel</p>
				</aside>
			</article>
			<article class="direita">
			<figure class="d"><img src="_fotos/f4.png"></figure>
			<aside class="texto2">
				<h1>Visite nossa loja </h1>
				<p>Variedade em produtos eletrônicos</p>
				<p>localizada em S.R. das Mangabeiras-MA</p>
			</aside>
			</article>
		</section>
		<footer id="rodape">
			<p>&copy;Kamui Devs - 2020</p>
  			<a href="https://github.com/Kamui-devs/mangnet">
  				<img src="https://marcas-logos.net/wp-content/uploads/2020/03/GITHUB-LOGO.png">
  			</a>
		</footer>
	</div>
</body>
</html>