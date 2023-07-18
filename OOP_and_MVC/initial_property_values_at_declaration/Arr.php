<?php
	class Arr{
		private $numbers = [];
		
		public function getNumbers(){
			return $this->numbers;
		}
		
		public function add($arr){
			$this->numbers = array_merge($this->numbers, $arr);
		}
		
		public function getAvg(){
			$count = count($this->numbers);
			$sum = array_sum($this->numbers);
			$avg = $sum / $count;
			return $avg;
		}
	}