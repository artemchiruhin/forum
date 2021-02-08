<?php 
	session_start();
	if($_SESSION['user']){
		header('Location: pages/forum.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Вход</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/signin.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<form action="includes/signin.php" method="post">
			<input type="email" name="email" placeholder="Ваш email">
			<input type="password" name="password" placeholder="Ваш пароль">	
			<input type="submit" value="Войти" class="signIn">
			<a href="pages/register.php" class="register">Регистрация</a>
			<?php 
				if($_SESSION['message']){
					echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
				}
				unset($_SESSION['message']);
			?>
		</form>
	</div>
</body>
</html>