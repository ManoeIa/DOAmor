<!DOCTYPE html>
<html>
<head>
	<title>Farmácia | DOAmor</title>

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
		<main role="main">

		  <section>
		  	<div class="info">
		  		
		  	</div>
		  </section>
		  <section id="alime">
			  <div class="album py-5">
			  	<h3 class="tit text-center">Doe Produtos de Farmácia ao Lar dos Velhinhos:</h3>
			  	<div class="linha2"></div><br>
			    <div class="container">
			      <div class="row">
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm">
			            <img src="img/fralda.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			            <div class="card-body">
			              <h4 class="card-text"><b>Pacote de Fraldas M</b></h4>
			              <p class="card-text">Fraldas Geriátricas tamanho M.</p>
			              <div class="d-flex justify-content-between align-items-center">
			                <div class="btn-group">
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/dollar.png" title='Doar dinheiro'></button>
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/gift.png" title='Doar pacote'></button>
			                </div>
			                <small class="card-text">R$ 12,00</small>
			              </div>
			            </div>
			          </div>
			        </div>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm">
			            <img src="img/fralda.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			            <div class="card-body">
			              <h4 class="card-text"><b>Pacote de Fraldas G</b></h4>
			              <p class="card-text">Fraldas Geriátricas tamanho G.</p>
			              <div class="d-flex justify-content-between align-items-center">
			                <div class="btn-group">
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/dollar.png" title='Doar dinheiro'></button>
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/gift.png" title='Doar pacote'></button>
			                </div>
			                <small class="card-text">R$ 16,00</small>
			              </div>
			            </div>
			          </div>
			        </div>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm">
			            <img src="img/fralda.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			            <div class="card-body">
			              <h4 class="card-text"><b>Pacote de Fraldas GG</b></h4>
			              <p class="card-text">Fraldas Geriátricas tamanho GG.</p>
			              <div class="d-flex justify-content-between align-items-center">
			                <div class="btn-group">
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/dollar.png" title='Doar dinheiro'></button>
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/gift.png" title='Doar pacote'></button>
			                </div>
			                <small class="card-text">R$ 20,00</small>
			              </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm">
			            <img src="img/higiene.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			            <div class="card-body">
			              <h4 class="card-text"><b>Produtos Higiênicos</b></h4>
			              <p class="card-text">Pacote com escovas, creme dental, sabonetes, esponja de banho, etc.</p>
			              <div class="d-flex justify-content-between align-items-center">
			                <div class="btn-group">
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/dollar.png" title='Doar dinheiro'></button>
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/gift.png" title='Doar pacote'></button>
			                </div>
			                <small class="card-text">R$ 40,00</small>
			              </div>
			            </div>
			          </div>
			        </div>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm">
			            <img src="img/paracetamol.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			            <div class="card-body">
			              <h4 class="card-text"><b>Paracetamol</b></h4>
			              <p class="card-text">Remédio para o sistema reumatológico e ósseo (dores e febre).</p>
			              <div class="d-flex justify-content-between align-items-center">
			                <div class="btn-group">
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/dollar.png" title='Doar dinheiro'></button>
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/gift.png" title='Doar remédio'></button>
			                </div>
			                <small class="card-text">R$ 11,99</small>
			              </div>
			            </div>
			          </div>
			        </div>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm">
			            <img src="img/captopril.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			            <div class="card-body">
			              <h4 class="card-text"><b>Captopril</b></h4>
			              <p class="card-text">Remédio para o sistema cardiovascular (insuficiência cardíaca).</p>
			              <div class="d-flex justify-content-between align-items-center">
			                <div class="btn-group">
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/dollar.png" title='Doar dinheiro'></button>
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/gift.png" title='Doar remédio'></button>
			                </div>
			                <small class="card-text">R$ 20,16</small>
			              </div>
			            </div>
			          </div>
			        </div>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm">
			            <img src="img/atrovent.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			            <div class="card-body">
			              <h4 class="card-text"><b>Atrovent</b></h4>
			              <p class="card-text">Remédio para o sistema resiratório (asma, bronquite e doença pulmonar).</p>
			              <div class="d-flex justify-content-between align-items-center">
			                <div class="btn-group">
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/dollar.png" title='Doar dinheiro'></button>
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/gift.png" title='Doar remédio'></button>
			                </div>
			                <small class="card-text">R$ 21,95</small>
			              </div>
			            </div>
			          </div>
			        </div>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm">
			            <img src="img/antidiarreico.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			            <div class="card-body">
			              <h4 class="card-text"><b>Antidiarréicos</b></h4>
			              <p class="card-text">Remédio para o sistema digestório (controle de diarréia).</p>
			              <div class="d-flex justify-content-between align-items-center">
			                <div class="btn-group">
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/dollar.png" title='Doar dinheiro'></button>
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/gift.png" title='Doar remédio'></button>
			                </div>
			                <small class="card-text">R$ 30,00</small>
			              </div>
			            </div>
			          </div>
			        </div>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm">
			            <img src="img/cefalexina.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			            <div class="card-body">
			              <h4 class="card-text"><b>Cefalexina</b></h4>
			              <p class="card-text">Remédio para o sistema urinário (Infecção urinária).</p>
			              <div class="d-flex justify-content-between align-items-center">
			                <div class="btn-group">
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/dollar.png" title='Doar dinheiro'></button>
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/gift.png" title='Doar remédio'></button>
			                </div>
			                <small class="card-text">R$ 15,50</small>
			              </div>
			            </div>
			          </div>
			        </div>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm">
			            <img src="img/vitamina.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			            <div class="card-body">
			              <h4 class="card-text"><b>Vitamina B12 e Ferro</b></h4>
			              <p class="card-text">Remédio para o sistema hematológico (anemia, leucemia e linfomas).</p>
			              <div class="d-flex justify-content-between align-items-center">
			                <div class="btn-group">
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/dollar.png" title='Doar dinheiro'></button>
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/gift.png" title='Doar remédio'></button>
			                </div>
			                <small class="card-text">R$ 20,00</small>
			              </div>
			            </div>
			          </div>
			        </div>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm">
			            <img src="img/antidepressivo.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			            <div class="card-body">
			              <h4 class="card-text"><b>Antidepressivos</b></h4>
			              <p class="card-text">Remédio para o sistema nervoso (transtornos em geral).</p>
			              <div class="d-flex justify-content-between align-items-center">
			                <div class="btn-group">
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/dollar.png" title='Doar dinheiro'></button>
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/gift.png" title='Doar remédio'></button>
			                </div>
			                <small class="card-text">R$ 52,50</small>
			              </div>
			            </div>
			          </div>
			        </div>
			        <div class="col-md-4">
			          <div class="card mb-4 shadow-sm">
			            <img src="img/insulina.jpg" class="bd-placeholder-img card-img-top" focusable="false" role="img"></img>
			            <div class="card-body">
			              <h4 class="card-text"><b>Insulina</b></h4>
			              <p class="card-text">Remédio para o sistema endócrino e metabólico (diabetes).</p>
			              <div class="d-flex justify-content-between align-items-center">
			                <div class="btn-group">
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/dollar.png" title='Doar dinheiro'></button>
			                  <button type="button" class="btn btn-sm btn-outline-secondary card-text"><img src="img/gift.png" title='Doar remédio'></button>
			                </div>
			                <small class="card-text">R$ 36,90</small>
			              </div>
			            </div>
			          </div>
			        </div>

			  </div>

		  </section>

		</main>
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