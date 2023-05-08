<?php
	/*
		С помощью трех инпутов спросите у пользователя год, месяц и день.
		После отправки формы выведите на экран, сколько дней осталось от
		введенной даты до Нового Года. По заходу на страницу сделайте так,
		чтобы в инпутах стояла текущая дата.
	*/
?>
	<form action="" method="POST">
		<p><input name="year" value="<?= year($_POST) ?>"> Год</p>
		<p><input name="month" value="<?= month($_POST) ?>"> Месяц</p>
		<p><input name="day" value="<?= day($_POST) ?>"> День</p>
		<p><input type="submit"></p>
	</form>
<?php
	if($_POST){
		$str1 = "$_POST[year]-$_POST[month]-$_POST[day]";
		$str2 = "$_POST[year]-12-31";
		$date1 = date_create($str1);
		$date2 = date_create($str2);
		
		$diff = date_diff($date1, $date2);
		echo $diff->format('%a дней');
	}

	function year($num){
		if (isset($_POST['year']))
				echo $_POST['year'];
			else echo date('Y'); 
	}
	function month($num){
		if (isset($_POST['month']))
				echo $_POST['month'];
			else echo date('m'); 
	}
	function day($num){
		if (isset($_POST['day']))
				echo $_POST['day'];
			else echo date('d'); 
	}