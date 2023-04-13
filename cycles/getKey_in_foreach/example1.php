<?php
	/*
		С помощью цикла foreach выведите на экран столбец ключей и элементов в формате green - зеленый.
	*/
	$arr = ['green' => 'зеленый', 'red' => 'красный','blue' => 'голубой'];
	
	foreach($arr as $key => $value){
		echo $key . ' - ' . $value . '<br>';
	}