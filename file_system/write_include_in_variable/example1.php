<?php
	/*
		Сделайте файл, который будет генерировать из массива дней
		выпадающий список дней недели. Запишите результат в 
		переменную в вашем основном файле. Выведите эту переменную
		в нескольких местах файла.
	*/
	ob_start();
		include 'test.php'; 
	$res = ob_get_clean();
	
	
	echo $res;
	echo $res;
	echo $res;
	echo $res;