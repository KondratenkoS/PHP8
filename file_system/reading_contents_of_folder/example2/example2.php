<?php
	/*
		Пусть в корне вашего сайта лежит папка dir, а в ней 
		какие-то текстовые файлы. Переберите эти файлы 
		циклом и выведите их тексты в браузер.
	*/
	$arr = (array_diff(scandir('dir'), ['..', '.']));
	foreach($arr as $elem){
		echo file_get_contents('dir/' . $elem) . '<br>';
	}