<?php
	/*
		#2
		Пусть на нашем сайте есть еще и страница index.php. 
		Сделайте так, чтобы часть этой страницы была открыта 
		для всех пользователей, а часть - только для авторизованных.
		#3
		Модифицируйте ваш код так, чтобы при успешной авторизации в
		сессию записывался также логин пользователя.
		#4
		Сделайте так, чтобы при заходе на любую страницу сайта,
		авторизованный пользователь видел свой логин, а не авторизованный
		- ссылку на страницу авторизации.
	*/
	session_start();
	if(isset($_SESSION['flash'])){
		echo $_SESSION['flash'] . '<br>';
		unset($_SESSION['flash']);
	}
	
	if(!empty($_SESSION['auth'])){
		echo "Вы вошли под логином - $_SESSION[login], как $_SESSION[status]<br>";
	?>
		<p><a href="profile.php">Информация о вашем профиле</p>
		<p><a href="users.php">Список всех пользователей</p>
	<?php 
		if($_SESSION['status'] === 'admin'){
			?> <p><a href="admin.php">Страничка для администратора</p> <?php
		}
	?>	
		<p><a href="1.php">Только для авторизованого пользователя</p>
		<p><a href="2.php">Только для авторизованого пользователя</p>
		<p><a href="3.php">Только для авторизованого пользователя</p>
		<p><a href="logout.php">Отменить авторизацию</p>
	<?php 
	} else {
		echo 'Контент для не авторизованых пользователей.';
		?>
			<p><a href="login.php">Пройдите авторизацию</p>
			<p><a href="registration.php">Зарегистрируйтесь</p>
		<?php
	}