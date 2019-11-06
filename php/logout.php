<?php
	//inicia a sessão
	session_start();
	//destrói a sessão que o usuário estava logado
	session_destroy();
	//e o usuário é redirecionado para a página de login
	echo "<script>window.location='../login.html' ;</script>";
?>