<?php
	/*
		#1
		Измените код регистрации так, чтобы все добавляемые пользователи 
		получали статус 'user'.
		#2
		Вручную поменяйте какому-нибудь пользователю его статус на 'admin'.
		Авторизуйтесь под этим пользователем.
		#3
		Сделайте страницу admin.php, к которой будут иметь доступ только
		пользователи со статусом 'admin'.
		#4
		Выведите на странице admin.php список всех зарегистрированных 
		пользователей вашего сайта в виде таблицы. Пусть в таблице будут
		две колонки: логин и статус.
		#5
		Модифицируйте предыдущую задачу так, чтобы появилась еще и третья
		колонка, со ссылкой, с помощью которой админ сможет удалить любого
		пользователя.
		#6
		Модифицируйте предыдущую задачу так, чтобы ряды таблицы с админами
		красились в красный цвет, а обычными юзерами - в зеленый.
		#7
		Модифицируйте предыдущую задачу так, чтобы появилась еще одна колонка.
		В этой колонке админ сможет менять права пользователей. Сделайте так,
		чтобы для всех обычных пользователей там стояла ссылка сделать его 
		админом, а для админа - ссылка сделать его юзером.
	*/
	session_start();
	require_once '../connection/connection.php';
	echo "Вы вошли под логином - $_SESSION[login], как $_SESSION[status]<br>";
	
	if(isset($_SESSION['flash'])){
		echo $_SESSION['flash'] . '<br>';
		unset($_SESSION['flash']);
	}
	
	if(!empty($_SESSION['auth']) and $_SESSION['status'] === 'admin'){
		$query = "SELECT * FROM auth"; 
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		//$data = mysqli_fetch_assoc($result);
		for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
		//var_dump($data);
		foreach($data as $elem){
			if($elem['status'] === 'admin'){
?>
				<head>
					<meta charset="utf-8">
					<title>Это заголовок тайтл</title>
					<link rel="stylesheet" href="styles.css">
				</head>
				<body>
					<table border="1">
					<tr>
						<td id="login_admin"><?= $elem['login']; ?></td>
						<td id="status_admin"><?= $elem['status']; ?></td>
						<td id="delete"><a href="changestatustouser.php/?id=<?= $elem['id']; ?>">Сделать юзером</a></td>
						<td id="delete"><a href="adminDeleteUser.php/?id=<?= $elem['id']; ?>">Удалить этого юзера</a></td>
					</tr>					
			</table>
<?php
			} else {
				?>
				<head>
					<meta charset="utf-8">
					<title>Это заголовок тайтл</title>
					<link rel="stylesheet" href="styles.css">
				</head>
				<body>
					<table border="1">
					<tr>
						<td id="login_user"><?= $elem['login']; ?></td>
						<td id="status_user"><?= $elem['status']; ?></td>
						<td id="delete"><a href="changestatustoadmin.php/?id=<?= $elem['id']; ?>">Сделать админом</a></td>
						<td id="delete"><a href="adminDeleteUser.php/?id=<?= $elem['id']; ?>">Удалить этого юзера</a></td>
					</tr>					
			</table>
<?php
			}
		}
	} else {
		echo 'Доступно только админу';
	}