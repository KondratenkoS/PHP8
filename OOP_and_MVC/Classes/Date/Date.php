<?php
	class Date
	{
		private $date;
		
		public function __construct($date = null)
		{
			// если дата не передана - пусть берется текущая
			$this->date = $date;
		}
		
		public function getDay()
		{
			// возвращает день
			$date = date_create($this->date);
			return date_format($date, 'd');
		}
		
		public function getMonth($lang = null)
		{
			$ru = [1 => 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
						'Июль', 'Август', 'Сеньтябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
			$en = [1 => 'January', 'February', 'March', 'April', 'May', 'June',
						'July', 'August', 'September', 'October', 'November', 'December'];
			// возвращает месяц
			$date = date_create($this->date);
			$monthNum = date_format($date, 'm');
			
			// переменная $lang может принимать значение ru или en
			// если эта не пуста - пусть месяц будет словом на заданном языке
			switch($lang){
				case 'ru':
					$monthNum = $ru[$monthNum];
				break;
				case 'en':
					$monthNum = $en[$monthNum];
				break;
			}
			return $monthNum;
		}
		
		public function getYear()
		{
			// возвращает год
			$date = date_create($this->date);
			return date_format($date, 'Y');
		}
		
		public function getWeekDay($lang = null)
		{
			$ru = [1 => 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
			$en = [1 => 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
			// возвращает день недели
			$date = date_create($this->date);
			$weekDay = date_format($date, 'w');
			// переменная $lang может принимать значение ru или en
			// если эта не пуста - пусть день будет словом на заданном языке
			switch($lang){
				case 'ru':
					$weekDay = $ru[$weekDay];
				break;
				case 'en':
					$weekDay = $en[$weekDay];
				break;
			}
			return $weekDay;
		}
		
		public function addDay($value)
		{
			// добавляет значение $value к дню
			$date = date_create($this->date);
			date_modify($date, $value . ' day');
			return date_format($date, 'd.m.Y');
		}
		
		public function subDay($value)
		{
			// отнимает значение $value от дня
			$date = date_create($this->date);
			date_modify($date, '-' . $value . ' day');
			return date_format($date, 'd.m.Y');
		}
		
		public function addMonth($value)
		{
			// добавляет значение $value к месяцу
			$date = date_create($this->date);
			date_modify($date, $value . ' month');
			
			return date_format($date, 'd.m.Y');
		}
		
		public function subMonth($value)
		{
			// отнимает значение $value от месяца
			$date = date_create($this->date);
			date_modify($date, '-' . $value . ' month');
			
			return date_format($date, 'd.m.Y');
		}
		
		public function addYear($value)
		{
			// добавляет значение $value к году
			$date = date_create($this->date);
			date_modify($date, '-' . $value . ' year');
			
			return date_format($date, 'd.m.Y');
		}
		
		public function subYear($value)
		{
			// отнимает значение $value от года
			$date = date_create($this->date);
			date_modify($date, '-' . $value . ' year');
			
			return date_format($date, 'd.m.Y');
		}
	
		public function __toString()
		{
			// выведет дату в формате 'год-месяц-день'
			$date = date_create($this->date);
			return date_format($date, 'Y-m-d');
		}
	}