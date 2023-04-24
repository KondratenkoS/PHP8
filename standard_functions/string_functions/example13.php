<?php
	// #13 Дана строка. Проверьте, что она заканчивается на '.png'.
	$str = 'daszxcvdvc.png';
	if(substr($str, -3) === 'png'){
		echo 'Заканчивается';
	} else {
		echo 'Не заканчивается';
	}
