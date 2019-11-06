 <?php
session_start();

//inclue o arquivo onde contem dados da conexão
include 'conexao.php';

//	nova variavel onde guarda o objeto criado na funcao getConnection()
$conn = getConnection();

$id = $_GET['id'];

// Aqui capturamos através do metodo POST os valores passado lá no formulario pelo "name=''", lembra?
$nome  = $_POST['nome_upd'];
$sobrenome  = $_POST['sobrenome_upd'];
$email = $_POST['email_upd'];
$senha = $_POST['senha_upd'];
$endereco = $_POST['endereco_upd'];
$telefone  = $_POST['telefone_upd'];

$sql_upd = "UPDATE usuario set nome = :nome_upd, sobrenome = :sobrenome_upd, email = :email_upd, senha = :senha_upd, endereco = :endereco_upd, telefone = :telefone_upd WHERE id = :id";

$sql = $sql_upd;

$stmt = $conn -> prepare($sql);

$stmt -> bindParam(':id', $id);
$stmt -> bindParam(':nome_upd', $nome);
$stmt -> bindParam(':sobrenome_upd', $sobrenome);
$stmt -> bindParam(':email_upd', $email);
$stmt -> bindParam(':senha_upd', $senha);
$stmt -> bindParam(':endereco_upd', $endereco);
$stmt -> bindParam(':telefone_upd', $telefone);
$stmt -> execute();

$_SESSION["email"] = $email;
$_SESSION["senha"] = $senha;

echo "<script>window.location='../perfil.php' ;alert('Seus dados foram alterados com sucesso!');</script>";
	
?>
