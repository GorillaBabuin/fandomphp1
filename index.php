<?
	session_start();
?>
<div class="links">
	<a href="signup.php" >Регистрация</a>
	<a href="login.php">Войти</a>
</div>
<a href="admin.php">Админка</a>

<form action="end.php">
	<button class="btn">выйти из аккаунта</button>
</form>


<?
	echo $_SESSION['id'];
?>


<script type="text/javascript">
	let links = document.querySelector('.links');

	let number = 0;

	number = <? echo $_SESSION['id']; ?>

	if(number>0){
		links.style.display = "none"; 
	}

</script>