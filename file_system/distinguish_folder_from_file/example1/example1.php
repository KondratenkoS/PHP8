<?php
	/*
		Пусть дан путь. Если путь ведет к папке выведите сообщение об этом.
	*/
	if(is_dir('dir')){
		echo 'Это папка';
	} else {
		echo 'Это не папка';
	}