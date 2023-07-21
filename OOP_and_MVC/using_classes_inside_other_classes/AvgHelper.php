<?php
	class AvgHelper{
		public function getAvg($arr){
			$count = count($arr);
			$sum = array_sum($arr);
			return $sum / $count;
		}
	}