<?php
	session_start();
	require_once 'connection/connection.php';
	if(empty($_SESSION['auth'])){
		header('Location: /php8/site_engine/forum/layout.php');
		die();
	}
	
	$query = "SELECT message FROM post WHERE id = '$_REQUEST[messageId]'";
	$post_result = mysqli_query($link, $query) or die(mysqli_error($link));
	$row = mysqli_fetch_assoc($post_result);
	
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
		<title>ТЕМЫ форума</title>
	</head>
	<body>
		<nav class="navbar bg-secondary text-white">
			<div class="container">
				<h1>Hell's FORUM - edit message!</h1>
			</div>
		</nav>

		<div  class="container">
			<div class="mb-3">
				<form action="" method="POST">
					<label for="exampleFormControlTextarea1" class="form-label fw-bold">Измените сообщение</label>
					<input type="hidden" name="messageId" value="<?=$_REQUEST['messageId']?>">
					<textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="5" placeholder="<?=$row['message'] ?? ''?>"></textarea><br>
					<button class="btn btn-success" type="submit">Сохранить</button>
				</form>
				<form action="/php8/site_engine/forum/chat.php?topic_id=<?=$_GET['topic_id']?>" method="POST">
					<button class="btn btn-success" type="submit">Отменить</button><br>
				</form>
			</div>
		</div>	
	</body>
</html>

<?php

	if(!empty($_REQUEST['message'])){
		$query = "UPDATE post SET message = '$_REQUEST[message]' WHERE id = '$_REQUEST[messageId]'";
		$user_result = mysqli_query($link, $query) or die(mysqli_error($link));

		header('location: /php8/site_engine/forum/chat.php?topic_id=' . $_GET['topic_id']);
		die();
	}