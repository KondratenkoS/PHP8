<?php
	/*
		Выведите записи нашей таблицы в следующем виде:

		<div>
			<h2>user1</h2>
			<p>
				23 years, <b>400$</b>
			</p>
		</div>
		<div>
			<h2>user2</h2>
			<p>
				24 years, <b>500$</b>
			</p>
		</div>
		<div>
			<h2>user3</h2>
			<p>
				25 years, <b>600$</b>
			</p>
		</div>
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT * FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	