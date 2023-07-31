<?php
	/*
		#1
		Сделайте класс Disk (круг), реализующий интерфейс Figure.
	*/
	require_once 'Disk.php';
	
	$disk = new Disk(34);
	echo 'Площадь круга ' . $disk->getSquare() . '<br>';
	echo 'Периметр круга ' . $disk->getPerimeter() . '<br>';