<?php	
	class User{
		private $name;
		private $surname;
		private $birthday;
		private $age;
		
		public function __construct($name, $surname, $birthday){
			$this->name = $name;
			$this->surname = $surname;
			$this->birthday = $birthday;
			$this->age = $this->calculateAge($birthday);
		}
		
		public function getName(){
			return $this->name;
		}
		
		public function getSurname(){
			return $this->surname;
		}
		
		public function getBirthday(){
			return $this->birthday;
		}
		
		public function getAge(){
			return $this->age;
		}
		
		private function calculateAge($dateBirthday){
			$date1 = date_create($dateBirthday);
			$date2 = date_create(date('Y-m-d', time()));
			$diff = date_diff($date1, $date2);
			echo $diff->format('%y годиков');
		}
	}