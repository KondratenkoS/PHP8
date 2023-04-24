<?php
	/* #26
		Проверьте, что строка начинается на 'http://'.
	*/
	$str = 'https://sdjgjkcvnsdv/dvd/dv/';
	if(strpos($str, 'http://') === 0){
		echo 'Da';
	} else {
		echo 'Net';
	}