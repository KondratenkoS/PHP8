<?php	
	/*
		#1
		Реализуйте класс Circle самостоятельно.
		#2
		С помощью написанного класса Circle найдите длину окружности и площадь круга с радиусом 10.
	*/
	require_once 'Circle.php';
	$circle = new Circle(10);
	
	echo $circle->getSquare() . '<br>';
	echo $circle->getCircuit() . '<br>';