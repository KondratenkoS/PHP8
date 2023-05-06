<?php
	/*
		Напишите функцию, которая в массиве с результатом удалит
		все нумерованные карманы, оставив только именованные.
	*/
	$str = '12:59:59';
	$reg = '/(?<houers>[01-9]{2}):(?<minutes>[01-9]{2}):(?<seconds>[01-9]{2})/';
	preg_match($reg, $str, $result);
	print_r($result);
	echo '<br><br>';
	print_r(del($result));

	function del($num){
		$reg = '/[01-9]+/';
		foreach($num as $key => $elem){
			if(preg_match($reg, $key)){
				unset($num[$key]);
			}
			
			//echo '<br>' . $key . '<br>';
		}
		return $num;
	}