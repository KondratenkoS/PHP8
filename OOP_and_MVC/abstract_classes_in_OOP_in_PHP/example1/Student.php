<?php
	require_once 'User.php';
	
	class Student extends User{
		private $scholarship;
		
		public function setScholarship($scholarship){
			$this->scholarship = $scholarship;
		}
		
		public function getScholarship(){
			return $this->scholarship;
		}
		
		public function increaseRevenue($value){
			$this->scholarship = $this->scholarship + $value;
		}
		
		public function decreaseRevenue($value){
			$this->scholarship = $this->scholarship - $value;
		}
	}