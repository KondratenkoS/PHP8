<?php
	/*
		Найдите все счастливые билеты. Счастливый билет - это билет,
		в котором сумма первых трех цифр его номера равна сумме вторых трех цифр его номера.
	*/
	$num1 = 123;
	$num2 = 124;
	func($num1, $num2);
	
	function func($num1, $num2){
		if(array_sum(str_split($num1, 1)) === 
		   array_sum(str_split($num2, 1))){
				echo 'You win';
		} else {
				echo 'Looooseeer';
		}
	}