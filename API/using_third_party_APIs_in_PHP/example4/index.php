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
				<form action="example4.php" method="POST">
					<label>Yes</label>
					<input type="hidden" name="yes" value="yes">
					<button class="btn btn-success" type="submit">Yes</button><br>
				</form>
				<form action="example4.php" method="POST">
					<label>No</label>
					<input type="hidden" name="no" value="no">
					<button class="btn btn-success" type="submit">No</button><br>
				</form>
			</div>
		</nav>
		<img src="<?= $_SESSION['image']; ?>" class="img-fluid rounded mx-auto d-block mt-4" alt="...">
	</body>
</html>