<?php
	session_start();
	require_once 'connection/connection.php';
	
	$query = "SELECT * FROM topic";
	$topic_result = mysqli_query($link, $query) or die(mysqli_error($link));
	for($topics = []; $row = mysqli_fetch_assoc($topic_result); $topics[] = $row);
	
	$query = "SELECT * FROM users";
	$user_result = mysqli_query($link, $query) or die(mysqli_error($link));
	for($users = []; $row = mysqli_fetch_assoc($user_result); $users[$row['id']] = $row);
	
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
				<h1>Hell's FORUM - ТЕМЫ</h1>
				<div>
					<?php if(empty($_SESSION['auth'])){ ?>
						<a href="/php8/site_engine/forum/auth_form.php" class="btn btn-light" tabindex="-1" role="button" aria-disabled="true">Авторизация</a>
						<a href="/php8/site_engine/forum/registration_form.php" class="btn btn-light" tabindex="-1" role="button" aria-disabled="true">Регистрация</a>
					<?php } else { ?>
						<a href="/php8/site_engine/forum/logout.php" class="btn btn-light" tabindex="-1" role="button" aria-disabled="true">Выход</a>
					<?php } ?>
				</div>
			</div>
		</nav>
		
		<div  class="container">
			<table class="table table-bordered">
				<thead class="table-secondary">
					<tr>
						<th scope="col">Название темы</th>
						<th scope="col">Кол. сообщений</th>
						<th scope="col">Автор</th>
						<th scope="col">Дата создания</th>
						<th scope="col">Последний ответ от:</th>
						<th scope="col">Дата ответа</th>
					</tr>
				</thead>
				<?php foreach($topics as $topic){ ?>
					<tbody>
						<tr>
							<th><a href="/php8/site_engine/forum/chat.php?topic_id=<?= $topic['id']?>"><?= $topic['topic_name'] ?></a></th>
							<td><?= $topic['count_message'] ?></td>
							<td><a href="#"><?= $users[$topic['user_id']]['login'] ?></a></td>
							<td><?= date('d-m-Y H:i:s', $topic['date_create']) ?></td>
							<td><?= $users[$topic['reply_user_id']]['login'] ?? '' ?></td>
							<td><?= $topic['reply_date'] ? date('d-m-Y H:i:s', $topic['reply_date']) : '' ?></td>
						</tr>
					</tbody>
				<?php } ?>
			</table>
		</div>	
		
		<?php if(!empty($_SESSION['auth'])){ ?>
				<div  class="container">
					<div class="mb-3">
						<form action="/php8/site_engine/forum/layout_code.php" method="POST">
							<label for="exampleFormControlTextarea1" class="form-label fw-bold">Создать тему</label>
							<input type="text" class="form-control" name="topic_name" value="" placeholder="Введите название темы">
							<label for="exampleFormControlTextarea1" class="form-label fw-bold">Сообщение темы</label>
							<textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="5"placeholder="Введите сообщение"></textarea><br>
							<button class="btn btn-success" type="submit">Опубликовать</button><br>
						</form>
					</div>
				</div>	
		<?php } ?>
		
	</body>
</html>