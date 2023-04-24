<?php
	/*	#37
		Проверьте, является ли слово палиндромом 
		(одинаково читается во всех направлениях, 
		примеры таких слов: madam, otto, kayak, nun, level).
	*/
	$arr = ['madam', 'ottos', 'kayak', 'nuns', 'level'];
	foreach($arr as $elem){
		if(strrev($elem) === $elem){
			echo $elem . ' - слово палиндром.<br>';
		} else {
			echo $elem . ' - обычное слово.<br>';
		}
	}