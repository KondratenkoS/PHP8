<?php
	session_start();
	require_once 'connection/connection.php';
	if(empty($_SESSION['auth'])){
		header('Location: /php8/site_engine/forum/layout.php');
		die();
	}
	
	$query = "SELECT * FROM post WHERE topic_id = '$_GET[topic_id]'";
	$post_result = mysqli_query($link, $query) or die(mysqli_error($link));
	for($post = []; $row = mysqli_fetch_assoc($post_result); $post[] = $row);
	
	$query = "SELECT * FROM topic WHERE id = '$_GET[topic_id]'";
	$post_result = mysqli_query($link, $query) or die(mysqli_error($link));
	$topicName = mysqli_fetch_assoc($post_result);
	
	$query = "SELECT * FROM users";
	$user_result = mysqli_query($link, $query) or die(mysqli_error($link));
	for($users = []; $row = mysqli_fetch_assoc($user_result); $users[$row['id']] = $row);

?>

<pre>
	<?php
		
		//print_r($topicName);
		//print_r($users);
		//print_r($post);
		//print_r($_GET['topic_id']);
	?>
</pre>

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
				<h1>Hell's FORUM - <?= $topicName['topic_name'] ?></h1>
				<div>
					<a href="/php8/site_engine/forum/layout.php" class="btn btn-light" tabindex="-1" role="button" aria-disabled="true">На главную</a>
				</div>
			</div>
		</nav>
			<div class="container mt-5">
				<table class="table table-bordered">
					<thead class="table-secondary">
						<tr>
							<th class="col-sm-5 col-md-2">Автор</th>
							<th>Сообщения</th>
						</tr>
					</thead>
					<?php foreach($post as $value){ ?>
						<tbody>
							<tr>
								<th>
									<p><a href="#"><?= $users[$value['user_id']]['login'] ?></a></p>
									<p><span>Опубликовано:<br><?= date('d-m-Y H:i:s', $value['date_create']); ?></span></p>
									<a href="/php8/site_engine/forum/delete.php?messageId=<?=$value['id']?>&topic_id=<?=$_GET['topic_id']?>">Удалить</a>
									<a href="/php8/site_engine/forum/edit.php?messageId=<?=$value['id']?>&topic_id=<?=$_GET['topic_id']?>">Редактировать</a>
								</th>
								<td>
									<br><?= $value['message']; ?>
								</td>
							</tr>
						</tbody>
					<?php } ?>
				</table>
			</div>
			
			<div  class="container">
				<div class="mb-3">
					<form action="/php8/site_engine/forum/chat_code.php" method="POST">
						<label for="exampleFormControlTextarea1" class="form-label fw-bold">Отправить сообщение</label>
						<input type="hidden" name="topicId" value="<?=$_GET['topic_id']?>">
						<textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="5" placeholder="Введите сообщение"></textarea><br>
						<button class="btn btn-success" type="submit">Ответить</button><br>
					</form>
				</div>
			</div>	
	</body>
</html>