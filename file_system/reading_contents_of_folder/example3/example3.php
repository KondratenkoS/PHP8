<?php
	/*
		Пусть в корне вашего сайта лежит папка dir, а в ней 
		какие-то текстовые файлы. Переберите эти файлы циклом,
		откройте каждый из них и запишите в конец восклицательный знак.
	*/
	$arr = array_diff(scandir('dir'), ['..', '.']);
	foreach($arr as $elem){
		file_put_contents('dir/' . $elem, file_get_contents('dir/' . $elem) . '!');
			echo file_get_contents('dir/' . $elem);
	}