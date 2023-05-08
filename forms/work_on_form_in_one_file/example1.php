<?
	/*
		Спросите у пользователя фамилию, имя и отчество. 
		После отправки формы выведите на экран введенные данные.
	*/
?>
<form action="" method="POST">
	<p><input name="name"></p>
	<p><input name="surname"></p>
	<p><input name="lastname"></p>
	<input type="submit">
</form>

<?php
	if(!empty($_POST)){
		echo "Меня зовут: $_POST[lastname] $_POST[name] $_POST[surname]";
	}