<?php
	/*
		На странице index.php выведите на экран список юзеров так, чтобы для каждого юзера была ссылка для его редактирования:
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT * FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	//var_dump($data);
?>
	<ul>
		<?php foreach($data as $elem){ ?>
			<li> <?= $elem['name'] ?> <a href="edit.php?edit=<?= $elem['id'] ?>">edit</a></li>
		<?php } ?>
	</ul>