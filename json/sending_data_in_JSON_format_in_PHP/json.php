<?php
	$array = range(1, 100);
	$json = json_encode($array);
	
	header('Content-Type: application/json');
	echo $json;
	
	//var_dump($array);