<?php
	/*
		Определите, заканчивается ли переданная 
		строка расширением jpg или jpeg.
	*/
	$str = 'bdjhfbv.jpeg';

	echo preg_match('/.jpg|.jpeg$/', $str);