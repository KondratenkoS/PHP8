<?php
	/*
		Что выведется на экран в результате выполнения следующего кода:
		Объясните почему.
		Ответ: - выведет 3, так как выполняется только один
				 первый return
	*/
	function func($num) {
		return $num;
		
		$result = $num * $num;
		return $result;
	}
	
		echo func(3);