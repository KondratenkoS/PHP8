<?php
	/*
		Дан массив со строками. Создайте в корне вашего сайта
		папки, названиями которых служат элементы этого массива
	*/
	$arr = ['dir1', 'dir2', 'dir3', 'dir4'];
	foreach($arr as $elem){
		mkdir($elem);
	}