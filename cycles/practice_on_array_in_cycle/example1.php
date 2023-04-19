<?php
	/*
		Увеличьте зарплату каждого работника на 10%.
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
		$arr[$key] = $arr[$key] + (($arr[$key] * 10) / 100);
		echo $arr[$key] . '<br>';
	}
	