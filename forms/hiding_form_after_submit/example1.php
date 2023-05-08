<?php
	/*
		С помощью формы спросите имя пользователя. После отправки
		формы поприветствуйте пользователя по имени, а форму уберите.
	*/
	if(empty($_POST)){ ?>
		<form action="" method="POST">
			<input name="name">
			<input type="submit">
		</form>
	<?php } else {
		echo "Здравствуйте: $_POST[name]";
	}