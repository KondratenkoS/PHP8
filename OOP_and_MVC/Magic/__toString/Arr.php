<?php
	class Arr{
		private $arr = [];
		
		public function add($par){
			$this->arr[] = $par;
			return $this;
		}
		
		public function __toString(){
			return (string)array_sum($this->arr);
		}
	}