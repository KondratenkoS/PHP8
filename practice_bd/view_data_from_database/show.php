<?php
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT * FROM users WHERE id = $_GET[id]";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	//var_dump($data);
?>
	<div>
		<p>Имя: <span class="name"><?= $data['name'] ?></span></p>
		<p>
			возраст: <span class="age"><?= $data['age'] ?></span>, 
			зарплата: <span class="salary"><?= $data['salary'] ?>$</span>.
		</p>
	</div>