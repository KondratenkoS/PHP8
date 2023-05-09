<?php
	/*
		С помощью двух переключателей спросите у пользователя
		его пол. Выведите результат на экран.
	*/
?>
	<form action="" method="POST">
		<p><input type="hidden" name="radio" value="0"></p>
		<p><input type="radio" name="radio" value="1"> Men</p>
		<p><input type="radio" name="radio" value="2"> Women</p>
		<p><input type="submit"></p>
	</form>
<?php
	if(!empty($_POST)){
		if($_POST['radio'] === '1'){
			echo 'You men';
		} else if($_POST['radio'] === '2'){
			echo 'You women';
		}
	}