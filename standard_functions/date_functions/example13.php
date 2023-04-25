<?php
	/* #13
		В переменной $date лежит дата в формате 2025-12-31. 
		Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год.
		Отнимите от этой даты 3 дня.
	*/
	$date = date_create('2025-12-31');
	date_modify($date, '2 days');
	echo date_format($date, 'd.m.Y') . '<br>';

	date_modify($date, '1 month 3 days');
	echo date_format($date, 'd.m.Y') . '<br>';

	date_modify($date, '1 year');
	echo date_format($date, 'd.m.Y') . '<br>';

	date_modify($date, '-3 days');
	echo date_format($date, 'd.m.Y') . '<br>';