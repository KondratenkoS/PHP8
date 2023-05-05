<?php
	/*
		Определите, начинается ли переданная строка с http или с https.
	*/
	$str = 'https.sdfsdv sdv vsdvcxvsdv';

	echo preg_match('/^http|https/', $str);