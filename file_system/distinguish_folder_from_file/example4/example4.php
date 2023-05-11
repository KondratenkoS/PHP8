<?php
	/*
		Дана папка. Выведите на экран столбец имен подпапок из этой папки.
	*/
	$data = array_diff(scandir('dir'), ['..', '.']);
	foreach($data as $elem){
		if(is_file('dir/' . $elem)){
			echo $elem . '<br>';
		}
	}