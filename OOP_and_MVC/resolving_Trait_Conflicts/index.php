<?php
	/*
		#1
		Сделайте 3 трейта с названиями Trait1, Trait2 и Trait3. Пусть в первом
		трейте будет метод method, возвращающий 1, во втором трейте - одноименный
		метод, возвращающий 2, а в третьем трейте - одноименный метод, возвращающий 3.
		#2
		Сделайте класс Test, использующий все три созданных нами трейта. Сделайте в этом
		классе метод getSum, возвращающий сумму результатов методов подключенных трейтов.
	*/
	require_once 'Test.php';
	$test = new Test;
	echo $test->getSum();