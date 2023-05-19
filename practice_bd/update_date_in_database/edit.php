<?php
	/*
		Реализуйте страницу edit.php для редактирования юзера.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$id = $_GET['edit'];
	$query = "SELECT * FROM users WHERE id = $id";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	//var_dump($data);
?>
	<form action="save.php" method="POST">
			<input type="hidden" name="id" value="<?= $id ?>">
		<p><input name="name" value=" <?= $data['name'] ?? '' ?> "> Введите новое имя</p>
		<p><input name="age" value=" <?= $data['age'] ?? '' ?> "> Введите новый возраст</p>
		<p><input name="salary" value=" <?= $data['salary'] ?? '' ?> "> Введите новую зарплату</p>
		   <input type="submit">
	</form>
<?php
	