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
		<title>Регистрация</title>
	</head>
	<body>
		<nav class="navbar bg-secondary text-white">
			<div class="container">
				<h1>Hell's FORUM - Регистрация</h1>
			</div>
		</nav>
		<div class="container p-3 mt-4">
			<form action="/php8/site_engine/forum/registration_code.php" method="POST" enctype="multipart/form-data">
			
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
				
				<?php if(isset($_SESSION['errorName'])){ ?>
					<div class="alert alert-warning" role="alert">
						<?php 
							echo $_SESSION['errorName']; 
							unset($_SESSION['errorName']);
						?>
					</div>
				<?php } ?>
				
				<label>Введите ФИО</label>
				<input type="text" class="form-control" name="full_name" value="<?= $_SESSION['name'] ?? ''; unset($_SESSION['name']);?>" id="full_name" placeholder="Введите ФИО"><br>
				
				<?php if(isset($_SESSION['errorEmail'])){ ?>
					<div class="alert alert-warning" role="alert">
						<?php 
							echo $_SESSION['errorEmail']; 
							unset($_SESSION['errorEmail']);
						?>
					</div>
				<?php } ?>
				
				<label>Введите email</label>
				<input type="text" class="form-control" name="email" value="<?= $_SESSION['email'] ?? ''; unset($_SESSION['email']);?>" id="email" placeholder="Введите email"><br>
				
				<?php if(isset($_SESSION['errorAvatar'])){ ?>
					<div class="alert alert-warning" role="alert">
						<?php 
							echo $_SESSION['errorAvatar']; 
							unset($_SESSION['errorAvatar']);
						?>
					</div>
				<?php } ?>
				
				<label>Изображение профиля</label>
				<input type="file" class="form-control" name="avatar" id="avatar"><br>
				
				<?php if(isset($_SESSION['errorPass'])){ ?>
					<div class="alert alert-warning" role="alert">
						<?php 
							echo $_SESSION['errorPass']; 
							unset($_SESSION['errorPass']);
						?>
					</div>
				<?php } ?>
				
				<label>Введите пароль</label>
				<input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
				
				<label>Подтвердите пароль</label>
				<input type="password" class="form-control" name="pass_confirm" id="pass_confirm" placeholder="Подтвердите пароль"><br>
				
				<button class="btn btn-success" type="submit">Зарегистрироваться</button><br>
				
				<p>
					Увас уже есть аккаунт? - <a href="auth_form.php">Авторизируйтесь</a>
				</p>
				
			</form>
		</div>
	</body>
</html>
