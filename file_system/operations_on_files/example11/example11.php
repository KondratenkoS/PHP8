<?php
	/*
		Проверьте, лежит ли в корне вашего сайта файл file.txt.
		Если нет - создайте его и запишите в него текст 'Hello Hell'.
	*/
	if(file_exists('file.txt')){
		echo 'Файл существует';
	} else {
		file_put_contents('file.txt', 'Hello Hell');
	}