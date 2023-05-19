<?php
	/*
		Модифицируйте предыдущую задачу так, чтобы у вас был следующий HTML код:

		<ul>
			<li>user1 <a href="?del=1">удалить</a></li>
			<li>user2 <a href="?del=2">удалить</a></li>
			<li>user3 <a href="?del=3">удалить</a></li>
		</ul>
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
			<li><?= $elem['name'] ?> <a href="?del=<?= $elem['id'] ?>">Удалить</a></li>
		<?php } ?>
	</ul>
<?php
	if(!empty($_GET)){
		$query = "DELETE FROM users WHERE id = $_GET[del]";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
	}