<?php
	/*
		С помощью формы спросите город и страну пользователя. 
		После отправки формы выведите введенные данные на экран.
		Сделайте так, чтобы введенные данные не пропадали из
		инпутов после отправки формы.
	*/
?>
	<form action="" method="POST">
		<p><input name="city"
				  value="<?php if(isset($_POST['city'])) echo $_POST['city'] ?>"></p>
		<p><input name="country"
				  value="<?php if(isset($_POST['country'])) echo $_POST['country'] ?>"></p>
		<p><input type="submit"></p>
	</form>
<?php
	if(!empty($_POST)){
		echo "Я живу в: $_POST[city] $_POST[country].";
	}