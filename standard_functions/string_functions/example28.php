<?php
	/*	#28
		Дан массив с элементами 'html', 'css', 'php'. 
		С помощью implode создайте строку из этих элементов, разделенных запятыми.
	*/
	$arr = ['html', 'css', 'php'];
	echo implode(', ', $arr);