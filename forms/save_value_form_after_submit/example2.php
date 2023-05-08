<?php
	/*
		С помощью формы спросите у пользователя год. После 
		отправки определите, этот год високосный или нет.
		Сделайте так, чтобы при первом заходе на страницу
		в инпуте уже стоял текущий год.
	*/
?>
	<form action="" method="POST">
		<p><input name="year"
				  value="<?= year($_POST) ?>"></p>
		<p><input type="submit"></p>
	</form>
<?php
	if(!empty($_POST)){
		$year = date("L", mktime(0,0,0, 7,7, $_POST['year']));
			if($year){
				echo 'Высокосный';
			} else {
				echo 'Не высокосный';
			}
	}

	function year($num){
		if (isset($_POST['year']))
				echo $_POST['year'];
			else echo date('Y'); 
	}
?>