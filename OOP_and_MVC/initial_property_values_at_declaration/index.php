<?php
	require_once 'Arr.php';
	/*
		#1
		Реализуйте класс Arr, похожий на тот, который я реализовал выше.
		В отличие от моего класса метод add вашего класса параметром должен 
		принимать массив чисел. Все числа из этого массива должны добавляться
		в конец массива $this->numbers.
		#2
		Реализуйте также метод getAvg, который будет находить среднее арифметическое чисел.
	*/
	$arr = new Arr;
	$arr->add($num = [1, 2, 3]);
	$arr->add($num = [5, 4, 2]);
	$numbers = $arr->getNumbers();
	
	foreach($numbers as $value){
		echo $value.'<br>';
	}
	
	echo $arr->getAvg();