<?php
	/*
		Даны 3 инпута. В них вводятся числа. Проверьте, что эти числа
		являются тройкой Пифагора: квадрат самого большого числа 
		должен быть равен сумме квадратов двух остальных.
	*/
?>
	<form action="" method="POST">
		<p><input name="num1" value="<?= $_POST['num1'] ?? '' ?>"> Число</p>
		<p><input name="num2" value="<?= $_POST['num2'] ?? '' ?>"> Число</p>
		<p><input name="num3" value="<?= $_POST['num3'] ?? '' ?>"> Самое большое число</p>
		<input type="submit">
	</form>
<?php
	if(!empty($_POST)){
		$a = $_POST['num1'];
		$b = $_POST['num2'];
		$c = $_POST['num3'];
		if(($a*$a)+($b*$b) == ($c*$c)){
			echo 'Это тройка Пифагора';
		} else {
			echo 'Это не тройка Пифагора';
		}
	}