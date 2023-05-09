<?php
	/*
		Даны 3 селекта и кнопка. Первый селект - это дни от 1 до 31, 
		второй селект - это месяцы от января до декабря, а 
		третий - это годы от 1990 до 2025. С помощью этих селектов можно
		выбрать дату. По нажатию на кнопку выведите на экран день недели,
		соответствующий этой дате.
	*/
	$month = [1 => 'Январь', 'Февраль', 'Март',
				   'Апрель', 'Май', 'Июнь',
				   'Июль', 'Август', 'Сентябрь',
				   'Октябрь', 'Ноябрь', 'Декабрь'];
	$weekday = [1 => 'понедельник', 'вторник', 'среда', 'четверг',
					 'пятница', 'суббота', 'воскресенье'];
?>
	<form action="" method="POST">
		<p><select name="day">
			<?php 
				for($i=1; $i<=31; $i++){?>
					<option value="<?= $i ?>"><?= $i ?></option>
			<?php }	?>
		</select> День</p>
		<p><select name="month">
			<?php 
				for($i=1; $i<=12; $i++){?>
					<option value="<?= $i ?>"><?= $month[$i]; ?></option>
			<?php }	?>
		</select> Месяц</p>
		<p><select name="year">
			<?php 
				for($i=1990; $i<=2025; $i++){?>
					<option value="<?= $i ?>"><?= $i ?></option>
			<?php }	?>
		</select> Год</p>
		<input type="submit">
	</form>
<?php
	if(!empty($_POST)){
		echo $weekday[date('w', mktime(0, 0, 0, $_POST['month'], $_POST['day'], $_POST['year']))];
		
	}
	
	