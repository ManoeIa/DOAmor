<!DOCTYPE html>
<html>
<head>
	<title>Perfil | DOAmor</title>

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
	              <a class="nav-link text-white" href="home-logado.php" >Home<span class="sr-only">(current)</span></a>
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
				        $sql_show = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
				        $stmt = $conn->prepare($sql_show);
				        $stmt->execute();

				        //Aqui criamos uma variavel chamada "funcionarios" onde ele recebe o resultado do objeto "stmt". com a função fatchALL, retornamos a lista de nomes, um array, mas como objetos, onde chamaremos mais abaixo no foreach
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
	</header>
	<main>
		<section class="barra-cadastro" id="altura">
			<div class="barra">
					  <div>
					    <div class="tab-content" id="nav-tabContent">
					      <div class="tab-pane show active " id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
					  	<br><h4 class="text-center">Meus Dados:</h4><br>
						<?php foreach($usuario as $user): ?>
							<h5><b>Nome:</b><?= $user->nome; ?></h5>
							<h5><b>Sobrenome:</b> <?= $user->sobrenome; ?></h5>
							<h5><b>Email:</b><?= $user->email; ?></h5>
							<h5><b>Senha:</b><?= $user->senha; ?></h5>
							<h5><b>Endereço:</b><?= $user->endereco; ?></h5>
							<h5><b>Telefone:</b><?= $user->telefone; ?></h5>

						<?php endforeach; ?>
					  </div>
					  	<a class="list-group-item text-center" href="form-edit.php?id=<?= $user->id ?>" style="font-size:18px;">Atualizar Dados</a>
					  	<a onclick="return confirm('Tem certeza que deseja excluir sua conta?')" class="list-group-item text-center" href="php/delete.php?id=<?= $user->id ?>" style="font-size:18px;">Excluir Conta</a>
					    
			</div>
		</section>
	</main>
</body>
</html>