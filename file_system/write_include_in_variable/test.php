<?php
	$dayweek = [1 => 'Понедельник', 'Вторник', 'Среда', 'Четверг', 
				     'Пятница', 'Суббота', 'Воскресенье'];
?>
	<form action="" method="POST">
		<select>
			<?php foreach($dayweek as $elem){ ?>
					<option><?= $elem ?></option>
			<?php } ?>
		</select>
		<p><input type="submit"></p>
	</form>