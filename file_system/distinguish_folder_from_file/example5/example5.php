<?php
	/*
		Дана папка. Запишите в конец каждого файла этой папки текущий момент времени.
	*/
	$data = array_diff(scandir('dir'), ['..', '.']);
	foreach($data as $elem){
		if(is_file('dir/' . $elem)){
			file_put_contents('dir/' . $elem, date('H:i:s'));
		}
	}