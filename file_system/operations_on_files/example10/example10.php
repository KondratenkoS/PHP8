<?php
	/*
		Проверьте, лежит ли в корне вашего сайта файл file.txt.
	*/
	if(file_exists('file.txt')){
		echo 'Файл существует';
	} else {
		echo 'Файл не существует';
	}