<?php
	/*
		#1
		Сделайте класс Employee, в котором будут следующие свойства: name, surname и salary.
		#2
		Сделайте так, чтобы свойства name и surname были доступны только для чтения, 
		а свойство salary - и для чтения, и для записи.
	*/
	$employ = new Employee('Hell', 'Hellovich', 100500);
	echo $employ->getName().'<br>';
	echo $employ->getSurname().'<br>';
	echo $employ->getSalary().'<br>';
	$employ->setSalary(300500); // можем изменить только потому что в классе прописан сеттер
	echo $employ->getSalary().'<br>';
	
	class Employee{
		private $name;
		private $surname;
		private $salary;
		
		public function __construct($name, $surname, $salary){
			$this->name = $name;
			$this->surname = $surname;
			$this->salary = $salary;
		}
		
		public function setSalary($salary){
			$this->salary = $salary;
		}
		
		public function getName(){
			return $this->name;
		}
		
		public function getSurname(){
			return $this->surname;
		}
		
		public function getSalary(){
			return $this->salary;
		}
	}