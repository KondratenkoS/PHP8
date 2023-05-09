<?php
	/*
		С помощью выпадающего списка предложите пользователю выбрать страну, в которой он живет.
	*/
?>
	<form action="" method="POST">
		<select name="country"> 
			<option>Ukraine</option>
			<option>England</option>
			<option>Germany</option>
		</select> Chosoe your country
		<p><input type="submit"></p>
	</form>
<?php
	if(!empty($_POST)){
		echo "You are living in $_POST[country]";
	}