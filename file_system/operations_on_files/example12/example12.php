<?php
	/*
		Проверьте, лежит ли в корне вашего сайта файл message.txt.
		Если такой файл есть - выведите текст этого файла на экран.
	*/
	if(file_exists('message.txt')){
		echo file_get_contents('message.txt');
	} else {
		file_put_contents('message.txt', 'Hello Hell');
	}