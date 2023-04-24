<?php
	// #14 Дана строка. Проверьте, что она заканчивается на '.png' или на '.jpg'.
	$str = 'daszxcvdvc.jpg';
	if(substr($str, -3) === 'png' or substr($str, -3) === 'jpg'){
		echo 'Заканчивается';
	} else {
		echo 'Не заканчивается';
	}
