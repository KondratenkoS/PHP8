<?php
	/*
		Напишите скрипт, который будет считать факториал числа.
		Само число вводится в инпут и после нажатия на кнопку
		пользователь должен увидеть результат.
	*/
?>
	<form action="" method="POST">
		<p><input name="num" value="<?= $_POST['num'] ?? '' ?>"></p>
		<input type="submit">
	</form>
<?php
	if(!empty($_POST)){
		echo "Факториал числа $_POST[num] = " . fact($_POST['num']);
	}
	
	function fact($n) {
		if ($n <= 0) return 1;
		return $n * fact ($n-1);
	}
