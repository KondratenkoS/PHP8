<?php
	/* #16
		Узнайте какой день недели был 100 дней назад.
	*/
	$week = [1 => 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat', 'Sun'];
	$date = date_create('2025-04-25');
	date_modify($date, '-100 days');
	echo $week[date_format($date, 'w')];