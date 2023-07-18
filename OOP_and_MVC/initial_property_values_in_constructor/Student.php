<?php
	class Student{
		private $name;
		private $course;
		
		public function __construct($name){
			$this->name = $name;
			$this->course = 1;
		}
		
		public function setCourse($course){
			$this->course = $course;
		}
		
		public function getName(){
			return $this->name;
		}
		
		public function getCourse(){
			return $this->course;
		}
		
		public function transferToNextCourse(){
			if($this->checkCourse($this->course)){
				$this->course++;
			}
		}
		
		private function checkCourse($course){
			if($course < 5){
				return true;
			}
		}
	}