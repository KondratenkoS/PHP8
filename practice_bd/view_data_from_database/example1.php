<?php
	/*
		Реализуйте просмотр юзера с помощью следующей верстки:

		<div>
			<p>
				имя: <span class="name">user1</span>
			</p>
			<p>
				возраст: <span class="age">23</span>,
				зарплата: <span class="salary">400$</span>,
			</p>
		</div>
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$id = $_GET['id']; //?id=1 - ввести в адресной строке, цифра это номер id
	$query = "SELECT * FROM users WHERE id = $id";
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