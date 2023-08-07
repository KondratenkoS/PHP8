<?php
require_once 'Image.php';
	/*
		#1
		Используя созданный вами класс выведите на экран какую-нибудь картинку.
		#2
		Установите созданной вами картинке атрибут width в значение 300,
		а атрибут height - в значение 400.
	*/
	echo (new Image())->setAttr('src', 'images.jpg')
					  ->setAttr('width', 300)
					  ->setAttr('height', 400);
