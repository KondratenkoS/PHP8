<?php
	/*
		Дан текстареа и кнопка. В текстареа вводится текст. 
		По нажатию на кнопку нужно посчитать процентное 
		содержание каждого символа в тексте.
	*/
?>
	<form action="" method="POST">
		<p><textarea name="text"><?= $_POST['text'] ?? '' ?></textarea></p>
		<input type="submit">
	</form>
<?php
	if(!empty($_POST)){
		echo count(count_chars($_POST['text'], 1));
	}

 