<?php
	/*
		Сделайте так, чтобы на экран выводилось сообщение об успешном сохранении формы.
	*/
	require_once 'connection.php';
	session_start();
	
	$query = "SELECT * FROM test"; 
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	//var_dump($data);
?>
	<form action="" method="POST">
		<p><input name="name" value=" <?= $_POST['name'] ?? '' ?> "></p>
		<p><input name="surname" value=" <?= $_POST['surname'] ?? '' ?> "></p>
		<p><input type="submit"></p>
	</form>
<?php
	if(!empty($_POST)){
		$name = $_POST['name'];
		$surname = $_POST['surname'];

		$query = "INSERT INTO test SET name = '$name', surname = '$surname'"; 
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		
		$_SESSION['flash'] = 'Данные успешно добавлены';
		header('Location: index.php');
		die();
	}
	
	if(isset($_SESSION['flash'])){
		echo $_SESSION['flash'];
		unset($_SESSION['flash']);
	}