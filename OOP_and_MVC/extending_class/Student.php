<?php
	require_once 'User.php';

	class Student extends User{
		private $course;
		
		public function setCourse($course){
			$this->course = $course;
		}
		
		public function getCourse(){
			return $this->course;
		}
	}