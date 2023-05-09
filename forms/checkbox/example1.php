<?php
	/*
		Сделайте форму с инпутом и флажком. С помощью инпута
		спросите у пользователя имя. После отправки формы,
		если флажок был отмечен, поприветствуйте пользователя,
		а если не был отмечен - попрощайтесь.
	*/
?>
	<form action="" method="POST">
		<p><input name="name" value="<?= $_POST['name'] ?? '' ?>"> Введите имя</p>
		<p><input type="checkbox" name="flag"> Кликни сюда</p>
		<p><input type="submit"></p>
	</form>
<?php
	if(!empty($_POST)){
		if(isset($_POST['flag'])){
			echo 'Hello user';
		} else {
			echo 'By by user';
		}
	}