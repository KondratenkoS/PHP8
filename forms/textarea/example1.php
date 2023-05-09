<?php
	/*
		Попросите пользователя оставить отзыв на сайт. 
		После отправки формы выведите этот отзыв на экран.
	*/
	if(empty($_POST)){
?>
	<form action="" method="POST">
		<p><textarea name="text"></textarea></p>
		<p><input type="submit"></p>
	</form>
<?php } else if(!empty($_POST)){
	echo $_POST['text'];
}
	