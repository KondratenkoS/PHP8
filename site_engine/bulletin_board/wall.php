<?php
	require_once '../connection/connection.php';
?>
<h3>Стена объявлений</h3>
<?php
	$query  = "SELECT * FROM announcement";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	//var_dump($data);
	foreach($data as $value){ ?>
		<p><h5>Автор поста: <?= $value['name']; ?></h5></p>
		<h5>Рубрика: <?= $value['rubric']; ?></h5>
		<h5>Текст объявления: <?= $value['text']; ?></h5>
<?php	}