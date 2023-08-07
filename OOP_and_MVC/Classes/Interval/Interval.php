<?php
	class Interval{
		public $date1;
		public $date2;
		
		public function __construct(Date $date1, Date $date2){
			$this->date1 = $date1;
			$this->date2 = $date2;
		}
		
		public function toDays(){
			// вернет разницу в днях
			$date1 = date_create($this->date1);
			$date2 = date_create($this->date2);
			
			$diff = date_diff($date1, $date2);
			return $diff->format('%a дней');
		}
		
		public function toMonths(){
			// вернет разницу в месяцах
			$date1 = date_create($this->date1);
			$date2 = date_create($this->date2);
			
			$diff = date_diff($date1, $date2);
			return $diff->format('%m месяцев');
		}
		
		public function toYears(){
			// вернет разницу в годах
			$date1 = date_create($this->date1);
			$date2 = date_create($this->date2);
			
			$diff = date_diff($date1, $date2);
			return $diff->format('%y лет(год)');
		}
	}