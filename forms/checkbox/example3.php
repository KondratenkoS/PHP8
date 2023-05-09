<?php
	/*
		Сделайте три чекбокса, которые будут сохранять свое значение после отправки.
	*/
?>
	<form action="" method="POST">
		<p><input type="hidden" name="flag1" value="0"></p>
		<p><input type="checkbox" name="flag1" value="1" 
			<?php if (!empty($_POST['flag1'])) echo 'checked' ?>></p>
			
		<p><input type="hidden" name="flag2" value="0"></p>
		<p><input type="checkbox" name="flag2" value="1" 
			<?php if (!empty($_POST['flag2'])) echo 'checked' ?>></p>
			
		<p><input type="hidden" name="flag3" value="0"></p>
		<p><input type="checkbox" name="flag3" value="1" 
			<?php if (!empty($_POST['flag3'])) echo 'checked' ?>></p>
			
		<p><input type="submit"></p>
	</form>