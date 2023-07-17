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
		<title>Если тебе скучно</title>
	</head>
	<body>
		<nav class="navbar bg-secondary text-white">
			<div class="container">
				<h1>Генератор идей для досуга</h1>
			</div>
		</nav>
		<div class="container p-3 mt-4">
			<form action="example3.php" method="POST">
				<label>Тебе скучно? Жми на кнопку!</label>
				<input type="hidden" name="num" value="">
				<button class="btn btn-success" type="submit">Жми!</button><br>
			</form>
		</div>
		
		<div class="container p-3 mt-4">
			<label>Активность:</label>
			<div class="alert alert-dark" role="alert">
				<?= $_SESSION['activity'] ?? '' ?>
			</div>
			<label>Сфера:</label>
			<div class="alert alert-dark" role="alert">
				<?= $_SESSION['type'] ?? '' ?>
			</div>
			<label>Количество участников:</label>
			<div class="alert alert-dark" role="alert">
				<?= $_SESSION['participants'] ?? '' ?>
			</div>
			<label>Ссылка на ресурс:</label>
			<div class="alert alert-dark" role="alert">
				<a href="<?= $_SESSION['link'] ?? '' ?>"><?= $_SESSION['link'] ?? '' ?></a>
			</div>
		</div>
	</body>
</html>