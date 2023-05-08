<?php
	/*
		Пусть с помощью формы у пользователя спрашивается пароль:
		<form action="/result.php" method="POST">
			<input type="password" name="pass">
			<input type="submit">
		</form>
		Пусть на странице с результатом в переменной хранится правильный пароль:

			$pass = '12345';

		Сделайте так, чтобы после отправки формы на странице результата сравнивался
		пароль из переменной и пароль из формы. После сравнения сообщите 
		пользователю, правильный он ввел пароль или нет.
	*/
?>
	<form action="index.php" method="POST">
		<input type="password" name="pass">
		<input type="submit">
	</form>