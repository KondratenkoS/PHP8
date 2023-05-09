<?php
	/*
		Дан инпут и кнопка. В этот инпут вводится дата рождения в формате
		'01.12.1990'. По нажатию на кнопку выведите на экран сколько дней
		осталось до дня рождения пользователя.
	*/
?>
	<form action="" method="POST">
		<p><input name="date" value="<?= $_POST['date'] ?? date('d.m.Y') ?>"></p>
		<input type="submit">
	</form>
<?php
	if(!empty($_POST)){
		$date1 = date_create($_POST['date']);
		$date2 = date_create('15.09.2023');
	
		$diff = date_diff($date1, $date2);
		echo $diff->format('%a дней');
	}