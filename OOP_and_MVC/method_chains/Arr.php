<?php
	class Arr{
		private $numbers = [];
		
		public function __construct($numbers){
			$this->numbers = $numbers;
			return $this;
		}
		
		public function add($num){ // добавляем одно число в массив
			$this->numbers[] = $num;
			return $this; // необходимо для использования метода в цепочке вызовов
		}
		
		public function addArray($nums){ // добавляем массив чисел к массиву
			$this->numbers = array_merge($this->numbers, $nums);
			return $this; // необходимо для использования метода в цепочке вызовов
		}
		
		public function getSum(){
			return array_sum($this->numbers);
		}
	}