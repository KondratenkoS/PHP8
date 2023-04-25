<?php
	/* #14
		Узнайте сколько дней осталось до Нового Года.
		Скрипт должен работать в любом году.
	*/
	$n_y = date('Y-m-d',mktime(23, 59, 59, 12, 31));
	$date1 = date_create($n_y);
	$date = date('Y-m-d', time());
	$date2 = date_create($date);
	
	$diff = date_diff($date1, $date2);
	echo $diff->format('%a дней');