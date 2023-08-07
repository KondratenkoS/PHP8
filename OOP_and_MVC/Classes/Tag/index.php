<?php
	/*
		#1
		Самостоятельно, не подсматривая в мой код, сделайте такой же класс Tag.
		#2
		Создайте с помощью класса Tag тег <img> и выведите его на экран.
		#3
		Создайте с помощью класса Tag тег <header> и выведите его на экран с
		текстом 'header сайта'.
		#4
		Добавьте в класс Tag возможность добавления атрибутов тега.
		#5
		Реализуйте метод removeAttr, который будет удалять переданный параметром атрибут.
		Сделайте так, чтобы этот метод также мог принимать участие в цепочке.
	*/
require_once 'Tag.php';
	
	$tag = new Tag("header");
	echo $tag->open() . 'header сайта' . $tag->close();
	
	$tag = new Tag("img src='images.jpg'");
	echo $tag->open() . '<br><br>';
	
	$tag = new Tag('input');
	echo $tag->setAttr('id', 'test')->setAttr('class', 'eee bbb')->setAttr('name', 'hell')->open() . '<br><br>';
	echo $tag->removeAttr('class')->removeAttr('id')->open() . '<br><br>';
	echo $tag->setAttrs(['id' => 'test', 'class' => 'eee'])
			 ->setAttr('type', 'text')
		     ->open() . '<br><br>';
	echo $tag->setAttr('id', 'test')
			 ->setAttr('disabled', true) // создаем атрибут без значения
			 ->open() . '<br><br>';
	
	echo (new Tag('input'))->setAttr('name', 'name1')->open() . '<br><br>';
	echo (new Tag('input'))->setAttr('name', 'name2')->open() . '<br><br>';
	
	// Выведет <input class="eee">:
	echo (new Tag('input'))->addClass('eee')->open() . '<br><br>';
	
	// Выведет <input class="eee bbb">:
	echo (new Tag('input'))->addClass('eee')->addClass('bbb')->open() . '<br><br>';
	
	// Выведет <input class="eee bbb kkk">:
	echo (new Tag('input'))
		->setAttr('class', 'eee bbb')
		->addClass('kkk')->open() . '<br><br>';
		
	// Выведет <input class="eee bbb">:
	echo (new Tag('input'))
		->setAttr('class', 'eee bbb')
		->addClass('eee') // такой класс уже есть и не добавится
		->open() . '<br><br>';
		
	// Выведет <input class="eee bbb">:
	echo (new Tag('input'))
		->addClass('eee')
		->addClass('bbb')
		->addClass('eee') // такой класс уже есть и не добавится
		->open() . '<br><br>';
		
	echo (new Tag('input'))
		->setAttr('class', 'eee zzz kkk') // добавим 3 класса
		->removeClass('zzz') // удалим класс 'zzz'
		->open() . '<br><br>'; // выведет <input class="eee kkk">