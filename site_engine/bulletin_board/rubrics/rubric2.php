<?php
	require_once '../../connection/connection.php';
?>
	<form action="" method="POST">
	<h3>Заполнить что-бы оставить объявление</h3>
		<p>Введите имя</p>
		<input name="autor">
		<p>Введите текст объявления</p>
		<textarea name="text"></textarea>
		<p><input type="submit"></p>
	</form>
<?php

	if(!empty($_POST)){
		$autor = $_POST['autor'];
		$text = $_POST['text'];
		$rubric = $_GET['rubric'];

		$query  = "SELECT * FROM announcement WHERE name = '$autor'";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		$data = mysqli_fetch_assoc($result);	
		
		if(empty($data)){
			$query  = "INSERT INTO announcement SET name = '$autor', text = '$text', rubric = '$rubric'";
			mysqli_query($link, $query) or die(mysqli_error($link));
			
			header('Location: ../index.php');
			die();
		} else {
			echo 'имя занято';
		}
	}
?>
<h3>Стена объявлений</h3>
<?php
	$query  = "SELECT * FROM announcement WHERE rubric = '$_GET[rubric]'";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	//var_dump($data);
	foreach($data as $value){ ?>
		<p><h5>Автор поста: <?= $value['name']; ?></h5></p>
		<h5>Рубрика: <?= $value['rubric']; ?></h5>
		<h5>Текст объявления: <?= $value['text']; ?></h5>
<?php	}