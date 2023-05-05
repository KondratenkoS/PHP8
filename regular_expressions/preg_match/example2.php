<?php
	/*
		Определите, начинается ли переданная строка с http.
	*/
	$str = 'http.sdfsdv sdv vsdvcxvsdv';

	echo preg_match('/^http/', $str);