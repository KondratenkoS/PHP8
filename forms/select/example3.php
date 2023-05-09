<?php
	/*
		С помощью выпадающего списка попросите пользователя выбрать его язык.
	*/
?>
	<form action="" method="POST">
		<select name="lang">
			<option value="1" 
				<?php if(!empty($_POST['lang']) and $_POST['lang'] === '1') echo 'selected'; ?>>En</option>
				
			<option value="2"
				<?php if(!empty($_POST['lang']) and $_POST['lang'] === '2') echo 'selected'; ?>>Ru</option>
				
			<option value="3"
				<?php if(!empty($_POST['lang']) and $_POST['lang'] === '3') echo 'selected'; ?>>Ua</option>
		</select> Choos your language
		<p><input type="submit"></p>
	</form>
<?php
	if(!empty($_POST)){
		echo $_POST['lang'];
	}