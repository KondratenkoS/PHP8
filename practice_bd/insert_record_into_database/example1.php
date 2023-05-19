<?php
	/*
		Реализуйте форму для добавления нового юзера.
	*/
	require_once '../mysqli_connect/connection.php'; 
	/*
	$query = "";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	//var_dump($data);
	*/
?>
	<form action="" method="POST">
		<p><input name="name"> Введите имя</p>
		<p><input name="age"> Введите возраст</p>
		<p><input name="salary"> Введите зарплату</p>
		<input type="submit">
	</form>
	
<?php
	if(!empty($_POST)){
		$name = $_POST['name'];
		$age = $_POST['age'];
		$salary = $_POST['salary'];
		
		$query = "INSERT INTO users SET name = '$name', age = '$age', salary = '$salary'";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
	}