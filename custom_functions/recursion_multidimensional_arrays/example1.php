<?php
	/*
		Дан многомерный массив произвольного уровня вложенности, например, такой:
		$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
		С помощью рекурсии выведите все примитивные элементы этого массива на экран.
	*/
	$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
	
	function func($arr) {
		foreach ($arr as $elem) {
			if (is_array($elem)) {
				func($elem);
			} else {
				echo $elem;
			}
		}
	}
	
	func($arr);