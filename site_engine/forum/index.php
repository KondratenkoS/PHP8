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
		<title>Форма регистрации</title>
	</head>
	<body>
		<div class="container mt-4">
			<div class="row">
				<div class="col">
					<h1>Форма регистрации</h1>
					<form action="check.php" method="POST">
						<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
						<input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
						<input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
						<button class="btn btn-success" type="submit">Зарегистрировать</button><br>
					</form>
				</div>
				<div class="col">
					<h1>Форма авторизации</h1>
					<form action="auth.php" method="POST">
						<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
						<input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
						<button class="btn btn-success" type="submit">Авторизироватся</button><br>
					</form>
				</div>
			</div>
		</div>
		
	</body>
</html>