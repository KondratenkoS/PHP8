<?php
	/*
		Напишите скрипт, который будет находить факториал числа.
		Факториал - это произведение всех целых чисел, меньше данного, и его самого.
	*/
	function fact($n)
	{
    if($n <= 0) return 1;
		return $n * fact ($n-1);
	}
	echo fact(4);