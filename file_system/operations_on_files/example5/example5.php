<?php
	/*
		Пусть в корне вашего сайта лежат файлы 1.txt, 2.txt и 3.txt.
		Вручную сделайте массив с именами этих файлов.
		Переберите его циклом и удалите все эти файлы.
	*/
	//Расскоментировать что-бы создать 3 файла
	/*
	for($i = 1; $i <= 3; $i++){
		file_put_contents($i . '.txt', '');
	}
	*/
	
	$files = ['1.txt', '2.txt', '3.txt'];
	foreach($files as $elem){
		unlink ($elem);
	}