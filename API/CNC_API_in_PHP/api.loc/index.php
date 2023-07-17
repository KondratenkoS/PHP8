<?php
	header('Content-Type: application/json');
	$uri = $_SERVER['REQUEST_URI'];
	echo $uri;
	
	preg_match('#/leap/([\d]+)/?$#', $uri, $leap);
	
	if (isLeap($leap[1])){
		echo 'Высокосный год';
	} else {
		echo 'Не высокосный';
	}

	preg_match('#/diff/([\d]+)/([\d]+)/?$#', $uri, $year);
	if (isset($year[1]) and isset($year[2])) {
		echo $year[2] - $year[1];
	} else {
		echo 'error';
	}
	


	function isLeap($year)
	{
		return date("L", mktime(0,0,0, 7,7, $year));
	}