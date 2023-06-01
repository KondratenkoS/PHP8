	<form action="" method="POST">
		<select name="country">
			<option value="USA">USA</option>
			<option value="China">China</option>
			<option value="Ukraina">Ukraina</option>
			<option value="Great Britain">Great Britain</option>
		</select>
		<input type="submit">
	</form
<?php
	if(!empty($_POST)){
		var_dump($_POST);
	}