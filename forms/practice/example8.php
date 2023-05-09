<?php
	/*
		Дан текстареа и кнопка. В текстареа вводится текст. 
		По нажатию на кнопку выведите количество слов и 
		количество символов в тексте.
	*/
?>
	<form action="" method="POST">
		<p><textarea name="text"><?= $_POST['text'] ?? '' ?></textarea></p>
		<input type="submit">
	</form>
<?php
	if(!empty($_POST)){
		echo 'В строке ' . strlen($_POST['text']) . ' символов,<br>' . 
			 'В строке ' . str_word_count($_POST['text']) . ' слов.';
	}