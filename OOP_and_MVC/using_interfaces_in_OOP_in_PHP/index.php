<?php
	/*
		#1
		Не подсматривая в мой код реализуйте такой же класс FiguresCollection.
		#2
		Добавьте в класс FiguresCollection метод getTotalPerimeter для нахождения 
		суммарного периметра всех фигур.
	*/
	require_once 'FiguresCollection.php';
	require_once 'Quadrate.php';
	require_once 'Rectangle.php';
	
	$figuresCollection = new FiguresCollection;
	
	$figuresCollection->add(new Quadrate(34));
	$figuresCollection->add(new Quadrate(35));
	$figuresCollection->add(new Rectangle(23, 31));
	$figuresCollection->add(new Rectangle(33, 42));
	echo 'Сумма площадей ' . $figuresCollection->getTotalSquare() . '<br>';
	echo 'Сумма периметров ' . $figuresCollection->getTotalPerimeter() . '<br>';