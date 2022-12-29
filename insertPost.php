<?
	session_start();
	$dir = "img/";

	$destination = $dir . basename($_FILES['image']['name']); //

	$typeFile = $_FILES['image']['tmp_name'];

	move_uploaded_file($typeFile, $destination); //функция которая выполняет загрузку файла



	$conn = mysqli_connect("127.0.0.1", "root", "", "project");

	$insert = "INSERT INTO posts (text, url, title, user_id) VALUES ('text','{$destination}','TITLE', '{$_SESSION['id']}')";

	$quer = mysqli_query($conn,$insert);

	
?>