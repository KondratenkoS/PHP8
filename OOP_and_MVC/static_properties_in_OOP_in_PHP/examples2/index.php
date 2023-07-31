<?php
	/*
		#2
		Сделайте класс Num, у которого будут два приватны статических свойства: num1 и num2.
		Пусть по умолчанию в свойстве num1 хранится число 2, а в свойстве num2 - число 3.
		#3
		Сделайте в классе Num метод getSum, который будет выводить на экран сумму значений
		свойств num1 и num2.
		#4
		Добавьте в наш класс Geometry метод, который будет находить объем шара по радиусу.
		С помощью этого метода выведите на экран объем шара с радиусом 10.
	*/
	require_once 'Num.php';
	require_once 'Geometry.php';
	
	$radius = 15;
	
	echo Num::getSum() . '<br>';
	echo Geometry::getCircleSquare($radius) . '<br>';
	echo Geometry::getCircleСircuit($radius) . '<br>';
	echo Geometry::getCircleVolume($radius) . '<br>';