<?php
	require_once 'User.php';
	
	class Employe extends User{
		private $salary;
		
		public function setSalary($salary){
			$this->salary = $salary;
		}
		
		public function getSalary(){
			return $this->salary;
		}
	}