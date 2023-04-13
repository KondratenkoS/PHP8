<?php
	/*
		В следующем коде программист вывел числа от 10 до 1:
		$i = 10;
	
		while ($i == 10) {
			echo $i;
			$i--;
		}
		В коде, однако, была допущена ошибка, которая привела к тому,
		что цикл вывел только число 10 и закончил свою работу.
		Исправьте ошибку программиста.
	*/
	$i = 10;
	
		while ($i <= 10 and $i > 0) {
			echo $i . '<br>';
			$i--;
		}