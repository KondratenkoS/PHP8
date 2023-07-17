<!DOCTYPE html>
<?php
	session_start();
?>
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
		<title>Интересные числа</title>
	</head>
	<body>
		<nav class="navbar bg-secondary text-white">
			<div class="container">
				<h1>Викторина</h1>
			</div>
		</nav>
		<div class="container p-3 mt-4">
			<form action="example2.php" method="POST">
				<label>Введите число</label>
				<input type="text" class="form-control" name="num" value="" id="login" placeholder="Введите число от 1-99"><br>
				<button class="btn btn-success" type="submit">Bum</button><br>
			</form>
		</div>

		<div class="container p-3 mt-4">
		<label>Категория:</label>
		<div class="alert alert-dark" role="alert">
			<?= $_SESSION['category'] ?? '' ?>
		</div>
		<label>Вопрос:</label>
		<div class="alert alert-dark" role="alert">
			<?= $_SESSION['question'] ?? '' ?>
		</div>
		<label>Ответ:</label>
		<div class="alert alert-dark" role="alert">
			<?= $_SESSION['answer'] ?? '' ?>
		</div>
		<label>Балы за ответ:</label>
		<div class="alert alert-dark" role="alert">
			<?= $_SESSION['value'] ?? '' ?>
		</div>
		
			
	</body>
</html>
