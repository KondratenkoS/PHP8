<?php
	/*
		Пусть в корне вашего сайта лежит папка dir, а в ней 
		какие-то текстовые файлы. Выведите на экран 
		столбец имен этих файлов.
	*/
	var_dump(array_diff(scandir('dir'), ['..', '.']));