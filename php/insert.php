 <?php
session_start();

//inclue o arquivo onde contem dados da conexão
include 'conexao.php';

//	nova variavel onde guarda o objeto criado na funcao getConnection()
$conn = getConnection();


// Aqui capturamos através do metodo POST os valores passado lá no formulario pelo "name=''", lembra?
$nome  = $_POST['nome'];
$sobrenome  = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$endereco = $_POST['endereco'];
$telefone  = $_POST['telefone'];

//	Guardo na variavel $sql a minha consulta ao banco de dados com os place-holders
$sql_insert = "INSERT INTO usuario (nome, sobrenome, email, senha, endereco, telefone) VALUES (?, ?, ?, ?, ?, ?)";

// nova variavel é criada recebendo os dados do objeto e do metodo "prepare"
$stmt = $conn->prepare($sql_insert);


$stmt->bindValue(1, $nome);		//Desse modo podemos chamar os métodos da classe. Uma delas é o bindValue
$stmt->bindValue(2, $sobrenome);
$stmt->bindValue(3, $email);
$stmt->bindValue(4, $senha);
$stmt->bindValue(5, $endereco);
$stmt->bindValue(6, $telefone);


//utilizamos o metodo "execute()" para rodar. caso não execute, cairá na segunda condição.
if($stmt->execute()){
	echo "<script>window.location='../login.html' ;alert('Você foi cadastrado com sucesso!');</script>";
}else{
	echo "<script>window.location='../cadastro.php' ;alert('Ocorreu um erro, tente novamente!');</script>";
}
exit;