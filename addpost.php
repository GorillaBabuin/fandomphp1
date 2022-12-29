<?
	session_start();

	$dir = "img/"; //переменная для адреса нашего файла
	$destination = $dir . basename($_FILES['image']['name']);
	$name = $_FILES['image']['tmp_name']; //название

	$upload = move_uploaded_file($name, $destination);

	echo $_SESSION['id'];

	$conn = mysqli_connect("127.0.0.1", "root", "", "project");

	$textInsert = "INSERT INTO posts (name, text, title, user_id) VALUES ('{$destination}','{$_POST['text']}', 'kolp', '{$_SESSION['id']}')";

	$quer = mysqli_query($conn,$textInsert);
?>