<?php
	/*
		#1
		Сделайте класс Rectangle, в котором в свойствах будут записаны ширина и высота прямоугольника.
		#2
		В классе Rectangle сделайте метод getSquare, который будет возвращать площадь этого прямоугольника.
		#3
		В классе Rectangle сделайте метод getPerimeter, который будет возвращать периметр этого прямоугольника.
	*/
	$rect = new Rectangle;
	$rect->setHight(15);
	$rect->setWidth(45);
	echo $rect->getSquare().'<br>'; // площадь прямоугольника
	echo $rect->getPerimeter().'<br>'; // периметр прямоугольника
	
	class Rectangle{
		public $width;
		public $hight;
		
		public function setWidth($width){
			$this->width = $width;
		}
		
		public function setHight($hight){
			$this->hight = $hight;
		}
		
		public function getWidth(){
			return $this->width;
		}
		
		public function getHight(){
			return $this->hight;
		}
		
		public function getSquare(){
			return $this->getWidth() * $this->getHight();
		}
		
		public function getPerimeter(){
			return ($this->getWidth() + $this->getHight()) * 2;
		}
	}