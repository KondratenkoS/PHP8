<?php
	class Arr{
		private $arr = [];
		
		public function __construct($num){
			$this->arr = $num;
		}
		
		public function add($num){
			$this->arr[] = $num;
		}
		
		public function getSum(){
			return array_sum($this->arr);
		}
	}