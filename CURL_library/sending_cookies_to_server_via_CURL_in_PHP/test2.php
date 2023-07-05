<div>
	<?php
		if (!empty($_COOKIE)) {
			echo $_COOKIE['num1'] + $_COOKIE['num2'];
		} else {
			echo 'error';
		}
	?>
</div>