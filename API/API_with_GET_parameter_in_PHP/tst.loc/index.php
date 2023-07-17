<?php
	//test
	$url = 'http://localhost/php8/API/API_with_GET_parameter_in_PHP/api.loc/index.php?m=07&d=11&y=23';
	
	$res = file_get_contents($url);
	echo $res;