<?php
	class Weekday{
		public $year;
		public $month;
		public $day;
		
		public function __construct($year, $month, $day){
			$this->year = $year;
			$this->month = $month;
			$this->day = $day;
		}
		
		public function __get($weekDay){
			if($weekDay === 'weekDay'){
				return date('D', mktime(0, 0, 0, $this->month, $this->day, $this->year));
			}
		}
	}