<?php
	/*
		Выведите записи нашей таблицы в следующем виде:

		<ul>
			<li>user1</li>
			<li>user2</li>
			<li>user3</li>
		</ul>
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT name FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	//var_dump($data);
	
	echo '<ul>';
		foreach($data as $elem){
			echo "<li>$elem[name]</li>";
		}
	echo '</ul>';