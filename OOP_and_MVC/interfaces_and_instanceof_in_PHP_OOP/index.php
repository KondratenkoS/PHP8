<?php
	/*
		#1
		Сделайте интерфейс Figure3d (трехмерная фигура), который будет иметь
		метод getVolume (получить объем) и метод getSurfaceSquare
		(получить площадь поверхности).
		#2
		Сделайте класс Cube, который будет реализовывать интерфейс Figure3d.
		#3
		Создайте несколько объектов класса Quadrate, несколько объектов класса 
		Rectangle и несколько объектов класса Cube. Запишите их в массив
		$arr в случайном порядке.
		#4
		Переберите циклом массив $arr и выведите на экран только площади 
		объектов реализующих интерфейс iFigure.
	*/
	require_once 'Cube.php';
	require_once 'Quadrate.php';
	require_once 'Rectangle.php';
	
	$arr = [
			new Quadrate(34),
			new Rectangle(34),
			new Rectangle(34),
			new Quadrate(34),
			new Cube(34),
			new Rectangle(34),
			new Cube(34)
	];
	
	foreach($arr as $value){
		if($value instanceof iFigure3d){
			echo $value->getSurfaceSquare() . '<br>';
		}
	}