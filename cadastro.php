 <?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro | DOAmor</title>

			<meta charset="utf-8">
			<meta name="robots" content="index,follow"> 
			<meta name="descripton" content="Doação de itens básicos para Lar de idosos."> 
			<meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript"> 
			<meta name="viewport" content="whidt-devide-width, initial-scale=1.0"> 
			<link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="css/stylesheett.css">
			<link rel="icon" href="img/icone1.ico" type="image/x-icon"> 
			<link rel="stylesheet" type="text/css" href="css/fontes.css">
			<script type="text/javascript" defer src="libs/bootstrap/js/bootstrap.min.js"></script>
			<script type="text/javascript" defer src="js/main.js"></script>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
			<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Pacifico" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
			<!--Permite a utilização de popover na página-->
			<script>
				$(document).ready(function(){
				    $('[data-toggle="popover"]').popover(); 
				});
			</script>
</head>
<body id="home">
	<header>
		<!--Barra de navegação-->
			<nav class="navbar navbar-expand-lg fixed-top navbar-light">
	      <div class="container">
	        <a class="navbar-brand" href="home.html"><h1>DOAmor <img src="img/CHARITY.png" width="45px" height="40px"></h1></a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>

	        <div class="collapse navbar-collapse" id="navbarsExample07">
	          <ul class="navbar-nav ml-auto">
	            <li class="nav-item active">
	              <a class="nav-link text-white" href="home.html">Home<span class="sr-only">(current)</span></a>
	            </li>
	            <li class="nav-item dropdown text-white">
	              <a class="nav-link dropdown-toggle text-white" href="https://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doações</a>
	              <div class="dropdown-menu" aria-labelledby="dropdown07">
	                <a class="dropdown-item" href="alimentos.html">Alimentos</a>
                    <a class="dropdown-item" href="roupas.html">Roupas</a>
                    <a class="dropdown-item" href="higiene.html">Higiene</a>
                    <a class="dropdown-item" href="medicamentos.html">Medicamentos</a>
	              </div>
	            </li>
	            <li class="nav-item active">
	              <a class="nav-link text-white" href="galeria.html" >Galeria<span class="sr-only">(current)</span></a>
	            </li>
	            <li class="nav-item">
	            	<!--Código do popover-->
	            	<a  class="nav-link text-white" tabindex="0" class="btn " role="button" data-toggle="popover" title="Minha Conta" data-placement="bottom" data-content="Já é cadastrado? <a href='login.html'>Fazer login</a> <br>Não é cadastrado? <a href='cadastro.php'>Criar Conta</a>" data-html="true">| Minha Conta</a>
	              
	            </li>
	          </ul>
	        </div>
	      </div>
	    </nav>
			</div>
		</header>
	<main>
		<section class="barra-cadastro">
			<!--Formulário de cadastro-->
			<div class="barra">
			<form name="form" method="post" action="./php/insert.php" onsubmit="return validacao();">
				<h2 class="text-center">CADASTRE-SE: Seja um voluntário!</h2>
			  <div class="form-row">
				    <div class="col-md-6 mb-3">
				      <label>Nome</label>
				      <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" required>
				    </div>
				    <div class="col-md-6 mb-3">
				      <label>Sobrenome</label>
				      <input type="text" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome" required>
				    </div>
				    <div class="col mb-3">
				      <label>E-mail</label>
				        <input type="email" class="form-control" name="email" placeholder="Digite um email" required>
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="col mb-3">
				      <label>Senha</label>
				      <input type="password" class="form-control" id="senhaCampo" name="senha" placeholder="Digite uma senha" required>
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="col-md-6 mb-3">
				      <label>Endereço</label>
				      <input type="text" class="form-control" name="endereco" placeholder="Digite seu endereço" required>
				    </div>
				    <div class="col-md-6 mb-3">
				      <label>Telefone</label>
				      <input type="text" class="form-control" name="telefone" placeholder="Digite seu telefone" required>
				    </div>
				  </div>
				  <button class="btn" id="bot" type="submit" name="submit"><img src="img/padlock.png" width="20px" height="20px"> Criar conta</button></a>
				</form>
			</div>
		</section>
	</main>
</body>
</html>