<?php
	/*
		Пусть у нас дано число. Давайте получим все собственные делители
		этого числа, являющиеся простыми числами.
		Напишете реализацию вспомогательных функций и решите поставленную задачу.
	*/
	print_r(getPrimeDivisors(100));
	
	function getPrimeDivisors($num) {
		$result = [];
		$divs = getOwnDivisors($num);
		
		foreach ($divs as $div) {
			if (isPrime($div)) {
				$result[] = $div;
			}
		}
		
		return $result;
	}
	
	function getOwnDivisors($num){
		$divider = [];
		for($i = $num; $i > 0; $i--){
			if($num % $i === 0){
				$divider[] = $i;
			}
		}
		return $divider;
	}
	
	function isPrime($num){
		for ($i = 2; $i < $num; $i++) {
			if ($num % $i === 0) {
				$flag = false;
				break; // выйдем из цикла
			}
		}
		return true;
	}