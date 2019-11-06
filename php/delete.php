<?php
	include 'conexao.php';
	$conn = getConnection();

	$id = $_GET['id'];

	$sql = 'DELETE FROM usuario WHERE id=:id';

	$stmt = $conn->prepare($sql);

	if ($stmt->execute([':id' =>$id])) {
		echo "<script>window.location='../home.html' ;alert('Sua conta foi excluída com sucesso!');</script>";
	}

?>