<?php
	/*
		Модифицируйте предыдущую задачу так, чтобы на странице были ссылки для удаления каждого юзера:

			<a href="?del=1">user1</a>
			<a href="?del=2">user2</a>
			<a href="?del=3">user3</a>
			
		Ссылки, конечно же, должны формироваться в цикле из полученных из БД данных.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT * FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	//var_dump($data);

	foreach($data as $elem){ ?>
		<p><a href="?del=<?= $elem['id'] ?>"><?= $elem['name'] ?></a></p>
<?php	}
	if(!empty($_GET)){
		$query = "DELETE FROM users WHERE id=$_GET[del]";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
	}