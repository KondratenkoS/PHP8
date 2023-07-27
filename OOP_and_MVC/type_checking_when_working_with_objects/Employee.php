<?php
	class Employee{
		private $name;
		private $surname;
		private $jobTitle;
		
		public function __construct($name, $surname, Post $jobTitle){
			$this->name = $name;
			$this->surname = $surname;
			$this->jobTitle = $jobTitle;
		}
		
		public function getName(){
			return $this->name;
		}
		
		public function getSurname(){
			return $this->surname;
		}
		
		public function getJobTitle(){
			return $this->jobTitle;
		}
		
		public function changePost(Post $newJobTitle){
			$this->jobTitle = $newJobTitle;
		}
	}