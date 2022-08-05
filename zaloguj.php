<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo']))){
		header('Location: login.php');
		exit();
	}

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0){
		echo "Error: ".$polaczenie->connect_errno;
	}
	else{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
	
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT * FROM users WHERE user='%s' AND pass='%s'",
		mysqli_real_escape_string($polaczenie,$login),
		mysqli_real_escape_string($polaczenie,$haslo)))){
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0){
				$_SESSION['zalogowany'] = true;
				unset($_SESSION['blad']);
				$rezultat->free_result();
				header('Location: index.php');
				
			} 
			else{
				
				$_SESSION['blad'] = '<d style="color:#fff;">Nieprawidłowy login lub hasło!</d';
				header('Location: login.php');
			}
		}
		$polaczenie->close();
	}
?>