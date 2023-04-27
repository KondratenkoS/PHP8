<?php
	/*
		Сделайте функцию delElem, которая параметрами будет принимать
		значение и массив и удалять из массива все элементы с таким значением.
	*/
	$arr = [1, 2, 3, 4, 5];
	$val = 2;
	
	print_r(delElem($arr, $val));
	
	function delElem($arr, $val){
		array_splice($arr, array_search($val, $arr), 1);
		return $arr;
	}