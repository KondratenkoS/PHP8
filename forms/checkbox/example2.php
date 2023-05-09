<?php
	/*
		С помощью флажка спросите у пользователя, есть ему уже
		18 лет или нет. Если есть, разрешите ему доступ на сайт,
		а если нет - не разрешите.
	*/
?>
	<form action="" method="POST">
		<p><input type="hidden" name="flag" value="0"></p>
		<p><input type="checkbox" name="flag" value="1"> 18 есть?</p>
		<p><input type="submit"></p>
	</form>
<?php
	if(!empty($_POST)){
		if($_POST['flag'] === '1'){
			echo 'Доступ разрешен';
		} else {
			echo 'Доступ запрещен';
		}
	}