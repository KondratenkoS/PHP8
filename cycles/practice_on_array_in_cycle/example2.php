<?php
	/*
		Сдулать так, чтобы зарплата увеличивалась на 10% только 
		тем работникам, у которых она меньше или равна 400.
	*/
	$arr = [
		'employee1' => 100,
		'employee2' => 200,
		'employee3' => 300,
		'employee4' => 400,
		'employee5' => 500,
		'employee6' => 600,
		'employee7' => 700,
	];
	foreach($arr as $key => $val){
		if($arr[$key] <= 400){
			$arr[$key] = $arr[$key] + (($arr[$key] * 10) / 100);
		}
		echo $arr[$key] . '<br>';
	}