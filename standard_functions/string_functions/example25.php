<?php
	/* #25
		Проверьте, что в строке есть две точки подряд.
	*/
	$str = 'asdxcs..sczcsc';
	if(strpos($str, '..')){
		echo 'Есть';
	} else {
		echo 'Нету';
	}