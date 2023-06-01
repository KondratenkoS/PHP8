<?php
	session_start();
		if(!empty($_SESSION['auth'])){
			echo 'Вы вошли под именем - ' . $_SESSION['login'] . '<br>';
			echo 'Контент для авторизованного пользователя';
			?>
				<p><a href="logout.php">Отменить авторизацию</p>
			<?php
		} else {
			echo 'Вам необходимо пройти авторизацию что-бы увидеть содержимое';
			?>
				<p><a href="login.php">Пройдите авторизацию</p>
			<?php
		}