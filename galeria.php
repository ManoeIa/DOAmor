<!DOCTYPE html>
<html>
<head>
	<title>DOAmor</title>

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
	        <a class="navbar-brand" href="home-logado.php"><h1>DOAmor <img src="img/CHARITY.png" width="45px" height="40px"></h1></a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>

	        <div class="collapse navbar-collapse" id="navbarsExample07">
	          <ul class="navbar-nav ml-auto">
	            <li class="nav-item active">
	              <a class="nav-link text-white" href="home-logado.php">Home<span class="sr-only">(current)</span></a>
	            </li>
	            <li class="nav-item dropdown text-white">
	              <a class="nav-link dropdown-toggle text-white" href="https://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doações</a>
	              <div class="dropdown-menu" aria-labelledby="dropdown07">
	                <a class="dropdown-item" href="alimentos.php">Alimentos</a>
                    <a class="dropdown-item" href="roupas.php">Roupas</a>
                    <a class="dropdown-item" href="farmacia.php">Farmácia</a>
	              </div>
	            </li>
	            <li class="nav-item active">
	              <a class="nav-link text-white" href="galeria.php" >Galeria |<span class="sr-only">(current)</span></a>
	            </li>
	            <li class="nav-item dropdown text-white">
	              <a class="nav-link dropdown-toggle text-white" href="https://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	              	<?php 
	              		include 'php/verifica.php';
				        include 'php/conexao.php';	


				        //  nova variavel onde guarda o objeto criado na funcao getConnection()
				        $conn = getConnection();
				        $email = $_SESSION['email'];
				        $senha = $_SESSION['senha'];

				     	// Consulta SQL que irá retornar valores do DB
				        $sql_show = "SELECT nome FROM usuario WHERE email = '$email' AND senha = '$senha'";
				        $stmt = $conn->prepare($sql_show);
				        $stmt->execute();

				        #Aqui criamos uma variavel chamada "funcionarios" onde ele recebe o resultado do objeto "stmt". com a função fatchALL, retornamos a lista de nomes, um array, mas como objetos, onde chamaremos mais abaixo no foreach
				        $usuario = $stmt->fetchAll(PDO::FETCH_OBJ);

				    ?>
				    <?php foreach($usuario as $user): ?>
				    <?php echo $user->nome; ?>
				    <?php endforeach; ?>
	              </a>
	              <div class="dropdown-menu" aria-labelledby="dropdown07">
	                <a class="dropdown-item" href="perfil.php">Perfil</a>
	                <!--Página de gerenciamento do cadastro-->
	                <a class="dropdown-item" href="imprimir.php">Voluntários</a>
	                <a class="dropdown-item" href="php/logout.php">Sair</a>
	              </div>
	            </li>
	     </ul>
	        </div>
	      </div>
	    </nav>
			</div>
		</header>
		<main>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			        <img class="painel d-block w-100" src="img/cama-dormitorio-idosos-1877350.jpg" alt="First slide">
			            <div class="carousel-caption d-none d-md-block">
			              <h2>MELHORE A VIDA DOS NOSSOS VELHINHOS</h2>
			              <h5>Conheça a mudança e alegria resultante de sua doação.</h5>
			            </div>
			    </div>
			      
			    <div class="carousel-item">
			      <img class="painel d-block w-100" src="img/adulto-amontoado-celebracao-1474705.jpg" alt="Second slide">
			      <div class="carousel-caption d-none d-md-block">
			            <h2>RECEBA FOTOS ESPECIAIS DOS VELHINHOS QUE AJUDOU</h2>
			            <h5>Os voluntários são presentiados com fotos e mensagens todo mês.</h5>
			        </div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			
			<section class="container4">
				<div class="album py-5">
			  	<div class="linha2"></div><br>
			    <div class="container">
			      <div class="row">
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm" id="foto">
			            <img src="img/artista-chapeu-fedora-desempenho-2008339.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			          </div>
			        </div>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm" id="foto">
			            <img src="img/adulto-alegria-ator-1837922.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			          </div>
			        </div>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm" id="foto">
			            <img src="img/aposentado-avo-bravo-6110.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			          </div>
			        </div>
			        <div class="linha2"></div><br>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm" id="foto">
			            <img src="img/cabelo-close-desgaste-2050981.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			          </div>
			        </div>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm" id="foto">
			            <img src="img/chapeu-expressao-facial-idoso-2050976.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			          </div>
			        </div>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm" id="foto">
			            <img src="img/adulto-atraente-beleza-2050999.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			          </div>
			        </div>
			        <div class="linha2"></div><br>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm" id="foto">
			            <img src="img/retrato-adoracao-sabedoria-bonito-mulher-adulto-cabelo-1729931.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			          </div>
			        </div>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm" id="foto">
			            <img src="img/flor-flora-idosos-1761392.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			          </div>
			        </div>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm" id="foto">
			            <img src="img/borrao-brincos-colar-1786258.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			          </div>

			  </div>
			  <div class="linha2"></div><br>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm" id="foto">
			            <img src="img/adultos-amor-anciaos-1642883.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			          </div>
			        </div>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm" id="foto">
			            <img src="img/adulto-amigos-amor-272864.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			          </div>
			        </div>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm" id="foto">
			            <img src="img/adulto-cabelo-grisalho-curticao-432722.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			          </div>
			</section>
			<hr>
			<!--Rodapé-->
			<section>
				<div id="rodape">
		      		<div class="rodape-02">
					<h5>Contato</h5><hr>
					<p>Fale com a gente! Quer saber mais sobre nosso trabalho? Mande um email que nós respondemos!<br>Email: info@doamor.com</p>
				</div>
				<div class="rodape-02">
					<h5>Sobre Nós</h5><hr>
						<a href="">Termos de Uso</a>
						<a href="">Política de Privacidade</a>
						<a href="">Atendimento</a>  
				</div>
				<div class="rodape-02">
					<h5>Venha fazer parte</h5><hr>
						<a href="">Nosso trabalho</a>
						<a href="">Se tornar voluntário</a>
						<a href="">Cadastrar ONG's</a>  
				</div>
				<div class="rodape-02">
					<h5>Nossas Redes Sociais</h5><hr>
					<div>
						<a href=""><img src="img/facebook-logo.png" width="30px" height="30px"></a>
						<a href=""><img src="img/instagram.png" width="30px" height="30px"></a>
						<a href=""><img src="img/twitter.png" width="35px" height="35px"></a>
						<a href=""><img src="img/youtube.png" width="35px" height="35px"></a>
					</div> 
				</div>
		      	</div>
		      	<div class="linha3"></div>
		      	<div class="linha text-center text-white">
		      		CopyRight © DOAmor 2019 - Todos os direitos reservados.
		      	</div>
			</section>
		</main>
		<!--Seta para ir para o topo-->
		<div style='float:right;'>
			<a href='#'>
			<img src='img/seta2.png' width="50px" height="50px" style='display:scroll; position:fixed; bottom:5px; right:5px;' title='Voltar ao Topo da Página'/></a>
		</div>
</body>
</html>