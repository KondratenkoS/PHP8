<?php
	/*
		#1
		Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го).
		#2
		В классе Student сделайте public метод transferToNextCourse, который будет переводить
		студента на следующий курс.
		#3
		Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5.
		#4
		Вынесите проверку курса в отдельный private метод isCourseCorrect.
	*/
	$student = new Student;
	$student->setName('Hell');
	$student->setCourse(4); // проверка пройдена и добавлен курс
	echo $student->getName().'<br>';
	echo $student->getCourse().'<br>';
	$student->transferToNextCourse($student->getCourse()); // если продет проверку, то переведет на следующий курс
	echo $student->getCourse().'<br>'; // выведет обновленный курс если была пройдена проверка, или ничего не изменится
	
	class Student{
		private $name;
		private $course;
		
		public function setName($name){
			$this->name = $name;
		}
		
		public function setCourse($course){
			if($this->isCourseCorrect($course)){
				$this->course = $course;
			}
		}
		
		public function getName(){
			return $this->name;
		}
		
		public function getCourse(){
			return $this->course;
		}
		
		public function transferToNextCourse($course){
			$course = $this->course + 1;
			if($this->isCourseCorrect($course)){
				$this->course = $course;
			}
		}
		
		private function isCourseCorrect($course){
			if($course <= 5){
				return true;
			}
		}
	}