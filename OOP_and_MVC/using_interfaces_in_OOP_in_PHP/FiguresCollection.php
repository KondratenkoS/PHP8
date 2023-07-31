<?php
require_once 'iFigure.php';

	class FiguresCollection{
		private $figures = [];

		public function add(iFigure $figure){
			$this->figures[] = $figure;
		}
		
		public function getTotalSquare(){
			$sum = 0;
			foreach($this->figures as $figure){
				$sum += $figure->getSquare();
			}
			return $sum;
		}
		
		public function getTotalPerimeter(){
			$sum = 0;
			foreach($this->figures as $figure){
				$sum += $figure->getPerimetr();
			}
			return $sum;
		}
	}