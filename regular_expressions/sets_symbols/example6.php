<?php
	/*
		Дана строка:
		$str = 'aAXa aeffa aGha aza ax23a a3sSa';
		Напишите регулярку, которая найдет по следующему шаблону:
		по краям стоят буквы 'a', а между ними - маленькие латинские буквы, не затронув остальных.
	*/
	$str = 'aAXa aeffa aGha aza ax23a a3sSa';
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('#a[a-z]+a#', '!', $str);