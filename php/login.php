<?php 
  session_start();
  include "conexao.php";

  $pdo = getConnection();

  $stmt = $pdo->prepare("SELECT * FROM usuario WHERE email = ? AND senha = ?"); 
  $stmt->bindValue(1, $_POST['email']); 
  $stmt->bindValue(2, $_POST['senha']); 

  $stmt->execute();

  $obj = $stmt->fetchObject(); 

  if ($obj) { 
    $_SESSION['email'] = $_POST['email']; 
    $_SESSION['senha'] = $_POST['senha'];
    echo "<script>window.location='../home-logado.php' ;alert('Bem Vindo!');</script>";
  } else { 
    echo "<script>window.location='../login.html' ;alert('Dados Incorretos, tente novamente.');</script>"; 
  } 
?>
