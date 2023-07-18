<?php
	/*
		#1
		Сделайте класс Employee, в котором будут следующие свойства работника - name, salary.
		Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза.
	*/
	$employee = new Employee;
	$employee->name = 'Hell';
	$employee->salary = 100500;
	echo $employee->salary.'<br>';
	$employee->doubleSalary(); //увеличим зарплату в 2 раза
	echo $employee->salary.'<br>';
	
	class Employee{
		public $name;
		public $salary;
		
		public function getSalary(){
			return $this->salary;
		}
		
		public function doubleSalary(){
			$this->salary = $this->getSalary() * 2;
		}
	}