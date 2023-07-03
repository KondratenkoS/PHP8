<?php
	session_start();
	if(!empty($_SESSION['auth'])){
		header('Location: /php8/site_engine/forum/layout.php');
		die();
	}
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="style/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
			  rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
					 integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
		<title>Авторизация</title>
	</head>
	<body>
		<nav class="navbar bg-secondary text-white">
			<div class="container">
				<h1>Hell's FORUM - Авторизация</h1>
			</div>
		</nav>
		<div class="container p-3 mt-4">
			<form action="/php8/site_engine/forum/auth_code.php" method="POST">
				
				<?php if(isset($_SESSION['errorLogin'])){ ?>
					<div class="alert alert-warning" role="alert">
						<?php 
							echo $_SESSION['errorLogin']; 
							unset($_SESSION['errorLogin']);
						?>
					</div>
				<?php } ?>
			
				<label>Введите логин</label>
				<input type="text" class="form-control" name="login" value="<?= $_SESSION['login'] ?? ''; unset($_SESSION['login']);?>" id="login" placeholder="Введите логин"><br>
				<label>Введите пароль</label>
				<input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
				<button class="btn btn-success" type="submit">Войти</button><br>
				<p>
					Увас нет аккаунта? - <a href="/php8/site_engine/forum/registration_form.php">Зарегистрируйтесь</a>
				</p>
				
				<?php if(isset($_SESSION['errorAuth'])){ ?>
					<div class="alert alert-warning" role="alert">
						<?php 
							echo $_SESSION['errorAuth']; 
							unset($_SESSION['errorAuth']);
						?>
					</div>
				<?php } ?>
				
			</form>
		</div>
	</body>
</html>