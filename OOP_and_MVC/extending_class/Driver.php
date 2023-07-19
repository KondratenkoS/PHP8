<?php
	require_once 'Employe.php';
	
	class Driver extends Employe{
		private $drivingExp;
		private $drivingCat = ['A', 'B', 'C', 'D'];
		
		public function setDrivingExp($exp){
			$this->drivingExp = $exp;
		}
		
		public function setDrivingCat($cat){
			$this->drivingCat[] = $cat;
		}
		
		public function getDrivingExp(){
			return $this->drivingExp;
		}
		
		public function getDrivingCat(){
			return $this->drivingCat;
		}
	}