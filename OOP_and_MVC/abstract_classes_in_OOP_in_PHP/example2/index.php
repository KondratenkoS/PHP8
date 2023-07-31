<?php
	/*
		#1
		Сделайте аналогичный класс Rectangle (прямоугольник), у которого будет два
		приватных свойства: $a для ширины и $b для длины. Данный класс также должен
		наследовать от класса Figure и реализовывать его методы.
		#2
		Добавьте в класс Figure метод getSquarePerimeterSum, который будет находить
		сумму площади и периметра.
	*/
	//require_once 'Figure.php';
	require_once 'Rectangle.php';
	
	$rect = new Rectangle(10, 20);
	echo 'Площадь прямоугольника ' . $rect->getSquare() . '<br>';
	echo 'Периметр прямоугольника ' . $rect->getPerimeter() . '<br>';
	echo 'Сумма площади и периметра ' . $rect->getSquarePerimeterSum() . '<br>';
	