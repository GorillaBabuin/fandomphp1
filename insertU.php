<?php 
	session_start();

	$conn = mysqli_connect("127.0.0.1", "root", "", "project");

	$insert = "INSERT INTO users (login, password) VALUES ('{$_POST['login']}', '{$_POST['password']}')";

	$quer = mysqli_query($conn,$insert);

	$_SESSION['id'] = mysqli_insert_id($conn);

	header("Location: index.php")
?>
