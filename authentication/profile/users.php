<?php
	/*
		#1
		Сделайте страницу users.php, зайдя на которую любой пользователь
		нашего сайта может увидеть список всех зарегистрированных пользователей
		нашего сайта в виде ссылок. Каждая ссылка будет вести на соответствующий профиль.
	*/
	require_once '../connection/connection.php';
	session_start();
	
	if($_SESSION['auth']){
	
		$query = "SELECT id, login FROM auth"; 
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		//$data = mysqli_fetch_assoc($result);
		for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

		foreach($data as $value){	?>
			<p><a href="usersprofile.php/?login=<?= $value['login']; ?>"><?= $value['login'] ?></a></p>
		<?php }
	} else {
		?>
			<p><a href="login.php">Пройдите авторизацию</p>
		<?php
	}
	