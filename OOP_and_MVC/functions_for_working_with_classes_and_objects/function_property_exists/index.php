<?php
	/*
		#1
		Сделайте класс Test со свойством prop1 и без свойства prop2. Проверьте,
		что выведет функция property_exists для свойства prop1 и для свойства prop2.
		#2
		Дан массив со свойствами класса. Дан также класс, имеющий часть из этих свойств. 
		Переберите этот массив циклом, для каждого свойства проверьте, существует ли оно
		в классе и, если существует, выведите на экран значение этого свойства.
	*/
	require_once 'Test.php';
	$test = new Test;
	echo property_exists($test, 'prop1');
	
	$arr = [
			'prop1',
			'prop2',
			'prop3',
			'prop4',
			'prop5'
	];
	
	foreach($arr as $prop){
		if(property_exists($test, $prop)){
			echo $test->$prop;
		}
	}