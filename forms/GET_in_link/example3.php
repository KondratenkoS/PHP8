<?php
	/*
		Дан массив:
		$arr = ['a', 'b', 'c', 'd', 'e'];
		Сделайте так, чтобы с помощью GET запроса можно было 
		вывести любой элемент этого массива. Для этого с помощью
		цикла foreach сделайте ссылку для каждого элемента массива.
	*/
	$arr = ['a', 'b', 'c', 'd', 'e'];
	foreach($arr as $elem){ ?>
		<p><a href="?par=<?= $elem ?>">Link</a></p>
<?php }
	if(!empty($_GET)){
		echo $_GET['par'];
	}
	