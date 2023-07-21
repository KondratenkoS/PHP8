<?php
	$date1 = date_create('1988-09-15');
	$date2 = date_create(date('Y-m-d', time()));
	
	$diff = date_diff($date1, $date2);
	echo $diff->format('%y годиков');